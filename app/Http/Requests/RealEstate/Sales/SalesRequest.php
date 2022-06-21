<?php

namespace App\Http\Requests\RealEstate\Sales;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\Accounts\VoucherPrefix;
use App\Models\RealEstate\Broker;
use App\Models\RealEstate\Flat;
use App\Models\RealEstate\FlatOwner;
use App\Models\RealEstate\Media;
use App\Models\RealEstate\Sales\Installment;
use App\Models\RealEstate\Sales\Purchaser;
use App\Models\RealEstate\Sales\Sale;
use App\Models\RealEstate\Sales\SalesCommodity;
use App\Services\Accounts\VoucherService;
use App\Services\GeneralService;
use App\Services\RealEstate\BrokerService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\CommodityService;
use App\Services\RealEstate\PurchaserService;
use App\Traits\General;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SalesRequest extends FormRequest
{
    private string $voucherNo;
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
        return [
            'date' => 'required',
            'building_id' => 'required',
            'floor_id' => 'required',
            'flat_id' => 'required',
            'payment_method' => 'required',
            'payment_sub_method' => 'required',
            'company_brokery' => 'boolean',
            'receive_remaining' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'total_amount' => Str::replace(',', '', $this->input('total_amount')),
            'balance' => Str::replace(',', '', $this->input('balance')),
            'total_broker_amount' => Str::replace(',', '', $this->input('total_broker_amount')),
            'after_discount_amount' => Str::replace(',', '', $this->input('after_discount_amount')),
            'company_brokery' => $this->boolean('company_brokery'),
            'transfer_fee' => Str::replace(',', '', $this->input('transfer_fee')),
            'discount_amount' => Str::replace(',', '', $this->input('discount_amount')),
        ]);
        if ($this->has('price_value')) {
            $this->merge([
                'price_value' => Str::replace(',', '', $this->input('price_value')),
                'receive_remaining' => $this->boolean('receive_remaining'),
            ]);
        }
    }

    public function createData() {
//        dd($this->all());
        DB::beginTransaction();

        try {
            $model = Sale::create($this->all());
            if ($model) {
                Flat::whereBuildingId(BuildingService::getBuildingId())->findorFail($model->flat_id)
                    ->update(['sales_status' => 'in-execution']);

                $this->voucherNo = VoucherService::getNextVoucherNo('INV');

                $this->savePurchasers($model);
                $this->saveTransactions($model);
                $this->saveBrokers($model);
                $this->generateInstallments($model);
                $this->saveMedia($model);
                if ($this->input('payment_sub_method') == '2' || $this->input('payment_sub_method') == '3') { //Commodity
                    $this->saveCommodities($model);
                }

                VoucherService::updateNumber('TRANSFER');
                VoucherService::updateNumber('INV');
            }

            DB::commit();
            return $model;

        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }

    private function savePurchasers($salesModel) {
        $purchaserEntries = $this->input('purchaser', []);
        $purchaserPercentage = $this->input('purchaserShare', []);

        foreach ($salesModel->flat->owners as $previousOwner) {
            FlatOwner::create([
                'hr_id' => $previousOwner->Hr->id,
                'flat_id' => $this->input('flat_id'),
                'percentage' => $previousOwner->percentage,
                'status' => false,
                'building_id' => BuildingService::getBuildingId(),
                'sale_id' => $salesModel->id,
            ]);
        }

        foreach ($purchaserEntries as $key => $value) {
            $salesModel->purchasers()->save(
                new Purchaser([
                    'sale_id' => $salesModel->id,
                    'hr_id' => $value,
                    'percentage' => $purchaserPercentage[$key],
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'building_id' => BuildingService::getBuildingId(),
                ])
            );
            FlatOwner::create([
                'hr_id' => $value,
                'flat_id' => $this->input('flat_id'),
                'percentage' => $purchaserPercentage[$key],
                'status' => true,
                'building_id' => BuildingService::getBuildingId(),
                'sale_id' => $salesModel->id,
            ]);
        }
        PurchaserService::convertHrToPurchaserAccountHead($purchaserEntries);
    }

    private function saveTransactions($salesModel) {
        $downPayment = 0;
        $downPaymentNarration = '';

        if ($this->input('payment_method') == '1') { //One Time
            $downPayment = $this->input('down_payment');
            $downPaymentNarration = 'Credit for Flat/Shop Purchase Down Payment <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>';

        } else { //Installment
            if ($this->input('payment_sub_method') == '1') {
                $downPayment = $this->input('down_payment');
                $downPaymentNarration = 'Credit for Flat/Shop Purchase Down Payment <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>';

            } else {
                if ($this->input('difference') > 0) {
                    $downPayment = 0;
                } else {
                    if ($this->input('receive_remaining') === true) {
                        $downPayment = $this->input('down_payment') - $this->input('price_value');
                        $downPaymentNarration = 'Credit for Flat/Shop Purchase Down Payment <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b><br>Cash: ' . GeneralService::number_format($downPayment) . ' , Commodity: ' . GeneralService::number_format($this->input('price_value')) ;
                    } else {
                        $downPayment = 0;
                    }
                }
            }
        }
        //==============>Seller Transactions
        $accountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Customer Receivable')
            ->whereJsonContains('account_id', $this->input('sellers', []))->first();
        //Seller Credit for Total Amount
        $accountHead->transactions()->save(
            new Transaction([
                'vNo' => $this->voucherNo,
                'vType' => 'Sales',
                'vDate' => $this->input('date'),
                'COAID' => $accountHead->HeadCode,
                'Credit' => $salesModel->total_amount,
                'Debit' => 0,
                'Narration' => 'Credit for Flat/Shop Sales <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $salesModel->flat->id,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ])
        );
        //Seller Discount Transactions
        if ($this->has('discount_amount') && $this->get('discount_amount') > 0 ) {
            //Seller Debit Transaction for Discount Amount
            $accountHead->transactions()->save(
                new Transaction([
                    'vNo' => $this->voucherNo,
                    'vType' => 'Discount',
                    'vDate' => $this->input('date'),
                    'COAID' => $accountHead->HeadCode,
                    'Credit' => 0,
                    'Debit' => $this->input('discount_amount'),
                    'Narration' => 'Debit for Flat/Shop Sales Discount <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                    'building_id' => BuildingService::getBuildingId(),
                    'flat_id' => $this->input('flat_id'),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );
        }


        //==============>Purchaser Transactions
        $accountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Account Payable')
            ->whereJsonContains('account_id', $this->input('purchaser', []))->first();
        //Purchaser Debit for Total Amount
        $accountHead->transactions()->save(
            new Transaction([
                'vNo' => $this->voucherNo,
                'vType' => 'Sales',
                'vDate' => $this->input('date'),
                'COAID' => $accountHead->HeadCode,
                'Credit' => 0,
                'Debit' => $salesModel->total_amount,
                'Narration' => 'Debit for Flat/Shop Purchase <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $salesModel->flat->id,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ])
        );

        //Purchaser Debit for Title Transfer Fee
        $accountHead->transactions()->save(
            new Transaction([
                'vNo' => $this->voucherNo,
                'vType' => 'Title-Transfer',
                'vDate' => $this->input('date'),
                'COAID' => $accountHead->HeadCode,
                'Credit' => 0,
                'Debit' => $salesModel->transfer_fee,
                'Narration' => 'Debit for Flat/Shop Purchase Title Transfer <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $salesModel->flat->id,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ])
        );
        //Purchaser Credit for Title Transfer Fee
        $accountHead->transactions()->save(
            new Transaction([
                'vNo' => $this->voucherNo,
                'vType' => 'Title-Transfer',
                'vDate' => $this->input('date'),
                'COAID' => $accountHead->HeadCode,
                'Credit' => $salesModel->transfer_fee,
                'Debit' => 0,
                'Narration' => 'Credit for Flat/Shop Purchase Title Transfer Payment <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $salesModel->flat->id,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ])
        );

        //Purchaser Discount Transactions
        if ($this->has('discount_amount') && $this->get('discount_amount') > 0 ) {
            //Purchaser Credit Transaction for Discount Amount
            $accountHead->transactions()->save(
                new Transaction([
                    'vNo' => $this->voucherNo,
                    'vType' => 'Discount',
                    'vDate' => $this->input('date'),
                    'COAID' => $accountHead->HeadCode,
                    'Credit' => $this->input('discount_amount'),
                    'Debit' => 0,
                    'Narration' => 'Credit for Flat/Shop Purchase Discount <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                    'building_id' => BuildingService::getBuildingId(),
                    'flat_id' => $this->input('flat_id'),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );
        }

        //==============>Down Payment Transactions
        if ($downPayment > 0) {
            //Purchaser Credit Transaction for Paid Amount
            $accountHead->transactions()->save(
                new Transaction([
                    'vNo' => $this->voucherNo,
                    'vType' => 'Sales',
                    'vDate' => $this->input('date'),
                    'COAID' => $accountHead->HeadCode,
                    'Credit' => $downPayment,
                    'Debit' => 0,
                    'Narration' => $downPaymentNarration,
                    'building_id' => BuildingService::getBuildingId(),
                    'flat_id' => $this->input('flat_id'),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ])
            );

            //Cash in Hand Debit Transactions for Paid/Down Payment Amount
            Transaction::create([
                'vNo' => $this->voucherNo,
                'vType' => 'Sales',
                'vDate' => $this->input('date'),
                'COAID' => '1020101',
                'Credit' => 0,
                'Debit' => $downPayment,
                'Narration' => Str::replace('Credit', 'Debit', $downPaymentNarration),
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $this->input('flat_id'),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);
        }

        //==============>Cash in Hand Debit for Title Transfer Fee
        Transaction::create([
            'vNo' => $this->voucherNo,
            'vType' => 'Title-Transfer',
            'vDate' => $this->input('date'),
            'COAID' => '1020101',
            'Credit' => 0,
            'Debit' => $salesModel->transfer_fee,
            'Narration' => 'Debit for Flat/Shop Sales Title Transfer Fee <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
            'building_id' => BuildingService::getBuildingId(),
            'flat_id' => $this->input('flat_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        //==============>Title Transfer Fee Head (313) Credit Transaction
        Transaction::create([
            'vNo' => $this->voucherNo,
            'vType' => 'Sales',
            'vDate' => $this->input('date'),
            'COAID' => '313',
            'Credit' => $salesModel->transfer_fee,
            'Debit' => 0,
            'Narration' => 'Debit for Flat/Shop Sales Title Transfer Fee <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
            'building_id' => BuildingService::getBuildingId(),
            'flat_id' => $this->input('flat_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        //==============>Product Sale Head (303) Transaction
        Transaction::create([
            'vNo' => $this->voucherNo,
            'vType' => 'Sales',
            'vDate' => $this->input('date'),
            'COAID' => '303',
            'Credit' => 0,
            'Debit' => $salesModel->after_discount_amount,
            'Narration' => 'Debit for Flat/Shop Sales <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
            'building_id' => BuildingService::getBuildingId(),
            'flat_id' => $this->input('flat_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
    }

    private function saveBrokers($salesModel) {

        //Brokery Income Head (312) Transaction
        Transaction::create([
            'vNo' => $this->voucherNo,
            'vType' => 'Sales',
            'vDate' => $this->input('date'),
            'COAID' => '312',
            'Credit' => $salesModel->total_broker_amount,
            'Debit' => 0,
            'Narration' => 'Debit for Flat/Shop Sale Brokery <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
            'building_id' => BuildingService::getBuildingId(),
            'flat_id' => $this->input('flat_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        //Cash in Hand Debit For Brokery Amount Transaction
        Transaction::create([
            'vNo' => $this->voucherNo,
            'vType' => 'Brokery',
            'vDate' => $this->input('date'),
            'COAID' => '1020101',
            'Credit' => 0,
            'Debit' => $salesModel->total_broker_amount,
            'Narration' => 'Debit for Flat/Shop Sale Brokery <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
            'building_id' => BuildingService::getBuildingId(),
            'flat_id' => $this->input('flat_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        if ($this->input('company_brokery') == false) {
            $brokerEntries = $this->input('broker', []);
            $brokerPercentage = $this->input('brokerShare', []);
            foreach ($brokerEntries as $key => $value) {
                Broker::create([
                    'record_id' => $salesModel->id,
                    'record_type' => 'sales',
                    'hr_id' => $value,
                    'percentage' => $brokerPercentage[$key],
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'building_id' => BuildingService::getBuildingId(),
                ]);

                $brokerAccountHead = BrokerService::convertHrToBrokerAccountHead($value);
                //Broker Credit of Brokery Percentage Amount
                $brokerAccountHead->transactions()->save(
                    new Transaction([
                        'vNo' => $this->voucherNo,
                        'vType' => 'Sales',
                        'vDate' => $this->input('date'),
                        'COAID' => $brokerAccountHead->HeadCode,
                        'Credit' => GeneralService::getAmountByPercentage($salesModel->total_broker_amount, $brokerPercentage[$key]),
                        'Debit' => 0,
                        'Narration' => 'Credit for Flat/Shop Sale <br><b>Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                        'building_id' => BuildingService::getBuildingId(),
                        'flat_id' => $this->input('flat_id'),
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ])
                );
            }
        }
    }

    private function generateInstallments($salesModel) {
        if ($this->input('payment_method') != '2') {
            return false;
        }

        $installmentDetails = $this->input('installment', []);
        if (count($installmentDetails['no']) > 0) {
            foreach ($installmentDetails['no'] as $key => $value) {
                $installmentNo = $installmentDetails['no'][$key];
                $installmentDate = $installmentDetails['date'][$key];
                $installmentAmount = Str::replace(',', '', $installmentDetails['amount'][$key]);
                if ($installmentDetails['no'][$key] == 'Down Payment') {
                    $status = 'paid';
                    $paidDate = Carbon::now();
                } else {
                    $status = 'unpaid';
                    $paidDate = null;
                }
                Installment::create([
                    'flat_id' => $salesModel->flat->id,
                    'sale_id' => $salesModel->id,
                    'installment_plan_id' => $this->input('installment_plan_id'),
                    'installment_no' => $installmentNo,
                    'installment_serial' => VoucherService::getNextVoucherNo('INSTALLMENT'),
                    'installment_date' => Carbon::parse($installmentDate),
                    'installment_amount' => Str::replace(',', '', $installmentAmount),
                    'status' => $status,
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                    'building_id' => BuildingService::getBuildingId(),
                    'paid_date' => $paidDate,
                ]);
                VoucherService::updateNumber('INSTALLMENT');
            }
        }

        return true;
    }

    private function saveMedia($salesModel) {
        $documents = $this->file('document', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/sales/documents/' . $fileName;

                $document->move('uploads/sales/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $salesModel->id,
                    'record_type' => 'sales_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
        // if ($this->file('document_1')) {
        //     $uploadedFile = $this->file('document_1');
        //     $fileName = General::generateFileName($uploadedFile);
        //     $path = 'uploads/sales/documents/' . $fileName;
        //     $uploadedFile->move('uploads/sales/documents', $fileName);
        //     $salesModel->document_1 = $path;
        // }

        if ($this->file('document_2')) {
            $uploadedFile = $this->file('document_2');
            $fileName = General::generateFileName($uploadedFile);
            $path = 'uploads/sales/documents/' . $fileName;
            $uploadedFile->move('uploads/sales/documents', $fileName);
            $salesModel->document_1 = $path;
        }

        if ($this->file('image_1')) {
            $uploadedFile = $this->file('image_1');
            $path = 'uploads/sales/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            $salesModel->document_1 = $path;
        }

        if ($this->file('image_2')) {
            $uploadedFile = $this->file('image_2');
            $path = 'uploads/sales/images/' . General::generateFileName($uploadedFile);
            Image::make($uploadedFile)->save($path);
            $salesModel->document_1 = $path;
        }

        $salesModel->save();
    }

    private function saveCommodities($salesModel) {
        $commodities = $this->input('commodity', array());
        if (count($commodities['value']) > 0) {
            //Commodity Profit (315) Credit Transaction
            Transaction::create([
                'vNo' => $this->voucherNo,
                'vType' => 'Sales',
                'vDate' => $this->input('date'),
                'COAID' => '315',
                'Credit' => $this->input('price_value'),
                'Debit' => 0,
                'Narration' => 'Credit for Commodity of Flat/Shop Sales <br><b>Title Transfer # ' . $salesModel->transfer_no . ' , Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                'building_id' => BuildingService::getBuildingId(),
                'flat_id' => $this->input('flat_id'),
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
            ]);

            foreach ($commodities['value'] as $key => $value) {
                SalesCommodity::create([
                   'sale_id' => $salesModel->id,
                   'type' => $commodities['value'][$key],
                   'size' => $commodities['size'][$key],
                   'unit' => $commodities['unit'][$key],
                   'construction_status' => $commodities['construction_status'][$key],
                   'property_type' => $commodities['property_type'][$key],
                   'price' => $commodities['price'][$key],
                   'total_price' => $commodities['total_price'][$key],
                   'in_form_of' => $commodities['in_form_of'][$key],
                   'model' => $commodities['model'][$key],
                   'make' => $commodities['make'][$key],
                   'color' => $commodities['color'][$key],
                   'chassis_no' => $commodities['chassis_no'][$key],
                   'reg_no' => $commodities['reg_no'][$key],
                   'remarks' => $commodities['remarks'][$key],
                   'created_by' => Auth::user()->id,
                   'building_id' => BuildingService::getBuildingId(),
                ]);

                $commodityHeadName = $salesModel->id . '-' . $commodities['value'][$key] . ' [' . $commodities['size'][$key] . $commodities['unit'][$key] . ']';
                $accountHead = CommodityService::createCommodityAccountHead($commodityHeadName);
                $accountHead->transactions()->save(
                    new Transaction([
                        'vNo' => $this->voucherNo,
                        'vType' => 'Sales',
                        'vDate' => $this->input('date'),
                        'COAID' => $accountHead->HeadCode,
                        'Credit' => 0,
                        'Debit' => is_null($commodities['total_price'][$key] ) ? $commodities['price'][$key] : $commodities['total_price'][$key],
                        'Narration' => 'Commodity of Flat/Shop Sales <br><b>Title Transfer # ' . $salesModel->transfer_no .  ' , Flat/Shop # ' . $salesModel->flat->id . ' (' . $salesModel->flat->flat_name . ')</b>',
                        'building_id' => BuildingService::getBuildingId(),
                        'flat_id' => $this->input('flat_id'),
                        'created_by' => Auth::user()->id,
                        'updated_by' => Auth::user()->id,
                    ])
                );
            }
        }
    }
}
