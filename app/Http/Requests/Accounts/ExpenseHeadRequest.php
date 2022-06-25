<?php

namespace App\Http\Requests\Accounts;

use App\Enum\TableEnum;
use App\Models\Accounts\AccountHead;
use App\Models\Accounts\ExpenseHead;
use App\Services\Accounts\ExpenseService;
use App\Services\BuildingService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ExpenseHeadRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->method() == "PUT") {
            return [
                'expense_head_name' => ['required', Rule::unique(TableEnum::EXPENSE_HEADS)->ignore($this->record_id)]
            ];
        } else {
            return [
                'expense_head_name' => ['required', Rule::unique(TableEnum::EXPENSE_HEADS)]
            ];
        }
    }

    protected function prepareForValidation()
    {
        if (is_null($this->parent_id)) {
            $this->merge([
                'parent_id' => 0,
            ]);
        }
    }

    public function createData() {
        $model = ExpenseHead::create($this->all());
        if ($model) {
            ExpenseService::createAccountHead($model);
        }
        return $model;
    }

    public function updateData($id) {
        $model = ExpenseHead::where('building_id', BuildingService::getBuildingId())->findorFail($id);
        if ($model->update($this->all())) {
            $model = ExpenseHead::where('building_id', BuildingService::getBuildingId())->find($id);
            $accountHead = AccountHead::where('account_type', 'expense')
                ->where('account_id', $id)->first();
            $accountHead->HeadName = $model->headName();
            $accountHead->save();
        }
        return $model;
    }

    public function deleteData($id) {
        $model = ExpenseHead::where('building_id', BuildingService::getBuildingId())->findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
            return true;
        }
        return false;
    }
}
