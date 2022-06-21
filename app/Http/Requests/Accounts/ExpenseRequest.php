<?php

namespace App\Http\Requests\Accounts;

use App\Models\Accounts\Expense;
use App\Models\Accounts\Transaction;
use App\Models\RealEstate\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->routeIs('dashboard.mark-expense-paid')) {
            return [];
        } else {
            return [
                'date' => 'required',
                'expense_head_id' => 'required',
                'payment_account' => 'required',
                'amount' => 'required',
            ];
        }
    }

    public function createData() {
        $model = Expense::create($this->all());
        if ($model) {
            $this->saveMedia($model);
        }

        return $model;
    }

    public function updateData($id) {
        Expense::whereBuildingId(BuildingService::getBuildingId())
            ->findorFail($id)->update($this->all());

        $model = Expense::whereBuildingId(BuildingService::getBuildingId())
            ->find($id);
        if ($model) {
            $this->saveMedia($model);
        }

        return $model;
    }

    public function deleteData($id) {
        $model = Expense::whereBuildingId(BuildingService::getBuildingId())
            ->findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }

    private function saveMedia($expenseModel) {
        if ($this->file('attachment')) {
            $file = $this->file('attachment');
            switch (Str::lower($file->getClientOriginalExtension())) {
                case ('doc' || 'docx' || 'pdf'):
                    $fileName = General::generateFileName($file);
                    $path = 'uploads/expense/' . $fileName;
                    $file->move('uploads/expense/', $fileName);
                    break;

                default:
                    $name = General::generateFileName($file);
                    $image = Image::make($file);
                    $path = 'uploads/expense/' . $name;
                    $image->save(public_path($path));
            }

            Media::updateOrCreate([
                'record_id' => $expenseModel->id,
                'record_type' => 'expense',
                'building_id' => BuildingService::getBuildingId(),
            ],
            [
                'filename' => $path,
                'updated_by' => Auth::user()->id,
            ]);

        }
    }

    public function markPaid() {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($this->ajax()) {
            if ($this->has('expenseID')) {
                $expenseID = $this->get('expenseID');
                $expense = Expense::whereBuildingId(BuildingService::getBuildingId())
                    ->where('is_paid', 0)->find($expenseID);
                if ($expense) {
                    if ($this->expenseTransactions($expense)) {
                        $expense->is_paid = 1;
                        $expense->save();
                        $output = ['success' => true, 'msg' => __('general.marked_paid_successfully')];
                    } else {
                        $output['msg'] = __('general.unable_to_make_transactions');
                    }
                } else {
                    $output['msg'] = __('general.no_record_found');
                }
            } else {
                $output['msg'] = __('general.invalid_request');
            }
        } else {
            $output['msg'] = __('general.invalid_request');
        }

        return $output;
    }

    private function expenseTransactions($expenseModel) {
        DB::beginTransaction();
        try {
            $expenseHeadCode = $expenseModel->expenseHead->accountHead->HeadCode;
            $expenseHeadName = $expenseModel->expenseHead->accountHead->HeadName;
            $paymentAccountHeadCode = $expenseModel->paymentAccount->HeadCode;
            $paymentAccountHeadName = $expenseModel->paymentAccount->HeadName;

            // Expense Head Debit
            $expenseModel->transactions()->save(
                new Transaction([
                    'vType' => 'Expense',
                    'vDate' => $expenseModel->date,
                    'COAID' => $expenseHeadCode,
                    'Narration' => $expenseModel->description,
                    'Debit' => $expenseModel->amount,
                    'Credit' => 0,
                    'is_posted' => 1,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'is_approve' => 1,
                    'building_id' => $expenseModel->building_id,
                ])
            );

            // cash in hand or petty account credit
            $expenseModel->transactions()->save(
                new Transaction([
                    'vType' => 'Expense',
                    'vDate' => $expenseModel->date,
                    'COAID' => $paymentAccountHeadCode,
                    'Narration' => '<b>Expense of ' . $expenseHeadName . ' from ' . $paymentAccountHeadName . '</b> Ref# ' . $expenseModel->voucher_no . ' <i>(' . $expenseModel->description . ')</i>',
                    'Debit' => 0,
                    'Credit' => $expenseModel->amount,
                    'is_posted' => 1,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'is_approve' => 1,
                    'building_id' => $expenseModel->building_id,
                ])
            );
            DB::commit();
            return true;
        } catch(\Exception $e) {
            DB::rollback();
            return false;
        }
    }
}
