<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\KeyWordEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts\AccountHeadRequest;
use App\Models\Accounts\AccountHead;
use App\Models\Flat;
use App\Models\FlatOwner;
use App\Models\HumanResource\Hr;
use App\Models\HumanResource\Nominee;
use App\Models\Sales\Installment;
use App\Models\Sales\InstallmentPlan;
use App\Models\Sales\Sale;
use App\Services\Accounts\AccountsService;
use App\Services\GeneralService;
use App\Services\RealEstate\BrokerService;
use App\Services\RealEstate\SalesService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function __;
use function redirect;
use function route;
use function view;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPaymentSubTypes(Request $request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '<option value>' . __('general.ph_payment_sub_method') . '</option>';

        if ($request->ajax()) {
            $paymentMethod = $request->get('paymentMethod');
            if ($paymentMethod == 1) {
                $html .= '<option value="1">' . __('general.cash') . '</option>' .
                    '<option value="2">' . __('general.commodity') . '</option>' .
                    '<option value="3">' . __('general.cash_and_commodity') . '</option>';
            } else {
                $html .= '<option value="1">' . __('general.cash') . '</option>' .
                    '<option value="2">' . __('general.commodity') . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'data' => $html];
        }

        return $output;
    }

    public function printInstallmentPlan()
    {
        $records = InstallmentPlan::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.print_installment_plans'),
            'records' => $records,
        ];

        return view('dashboard.print.installment-plan.index', $params);
    }

    public function printFlatOwner()
    {
        $records = FlatOwner::with('Hr', 'flat')->get();

        $params = [
            'pageTitle' => __('general.print_flat_owners'),
            'records' => $records,
        ];

        return view('dashboard.print.flat-owner.index', $params);
    }

    public function filterFlatOwner(Request $request)
    {
        $records = FlatOwner::with('Hr', 'flat')
            ->orWhere([
                'status' => $request->status,
                'flat_id' => $request->flat_id,
            ])->orWhereBetween('created_at', [$request->start_date, $request->end_date])->get();

        $params = [
            'pageTitle' => __('general.print_flat_owners'),
            'records' => $records,
        ];

        return view('dashboard.print.flat-owner.index', $params);
    }

    public function salesInvoicesByFlat(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '';// '<option value>' . __('general.ph_sales_invoice') . '</option>';
        if ($request->ajax()) {
            $flatID = $request->get('flatID');
            $salesType = $request->get('salesType') == 'one-time' ? '1' : '2';

            $records = Sale::where('flat_id', $flatID)
                ->where('status', 'open')->where('payment_method', $salesType)->select('id', 'sales_no')->get();

            foreach ($records as $record) {
                $html .= '<option value="' . $record->id . '">' . $record->sales_no . '</option>';
            }

            $output = ['success' => true, 'msg' => '', 'data' => $html];
        }
        return $output;
    }

    public function salesDetails(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $salesID = $request->get('salesID');
            $salesRecord = Sale::with('installments')->findorFail($salesID);
            $totalAmount = $salesRecord->after_discount_amount;
            $received = SalesService::salesReceivedAmount($salesID);
            $receivedAmount = $received['received'];
            $remainingAmount = ($totalAmount - $receivedAmount);
            $flatOwners = $salesRecord->flat->owners()->where('status', true)->where('sale_id', $salesID)->get();
            $ownerNames = '';
            foreach ($flatOwners as $owner) {
                $ownerNames .= $owner->Hr->full_name . ', ';
            }
            $hasInstallments = false;
            if ($salesRecord->installments()->exists()) {
                $hasInstallments = true;
            }
            $installments = '';
            $installmentDetails = '';
            $currentInstallment = '';
            if ($hasInstallments) {

                $records = $salesRecord->installments()->where('status', '!=', 'paid')->orderBy('installment_date', 'ASC')->get();
                foreach ($records as $record) {
                    $installments .= '<option value="' . $record->id . '">' . $record->full_name . '</option>';
                }
                $currentInstallment = $records[0]->id;
                $installmentRecords = $salesRecord->installments()->orderBy('installment_date', 'ASC')->get();
                $installmentDetails = view('dashboard.vouchers.components.buyer-installments-details', compact('installmentRecords'))->render();
            }


            $data = [
                'hasInstallments' => $hasInstallments,
                'installments' =>  $installments,
                'installmentDetails' => $installmentDetails,
                'currentInstallment' => $currentInstallment,
                'date' => GeneralService::formatDate( $salesRecord->date ),
                'downPayment' => $salesRecord->down_payment,
                'downPaymentFormatted' => GeneralService::number_format( $salesRecord->down_payment ),
                'owners' => $ownerNames,
                'totalAmount' => $totalAmount,
                'receivedAmount' => $receivedAmount,
                'remainingAmount' => $remainingAmount,
                'lastReceived' => $received['lastReceived'],
                'totalAmountFormatted' => GeneralService::number_format( $totalAmount ),
                'receivedAmountFormatted' => GeneralService::number_format( $receivedAmount ),
                'remainingAmountFormatted' => GeneralService::number_format( $remainingAmount ),
                'lastReceivedFormatted' => GeneralService::number_format( $received['lastReceived'] ),
                'salesDetailLink' => route('dashboard.sales.show', $salesRecord->id),
            ];
            $output = ['success' => true, 'msg' => '', 'data' => $data];
        }

        return $output;
    }

    public function printBuilding()
    {
        $records = Flat::with('owners', 'flatType')->get();
        $params = [
            'pageTitle' => __('general.print_building'),
            'records' => $records,
        ];

        return view('dashboard.print.building.index', $params);
    }

    public function filterBuilding(Request $request)
    {
        $records = Flat::with('owners', 'flatType')
            ->orWhere([
                'id' => $request->flat_id,
                'building_id' => $request->building_id,
                'floor_id' => $request->floor_id,
            ])
            ->get();
        $params = [
            'pageTitle' => __('general.print_building'),
            'records' => $records,
        ];

        return view('dashboard.print.building.index', $params);
    }

    public function printNominee()
    {
        $records = Nominee::all();
        $params = [
            'pageTitle' => __('general.print_nominee'),
            'records' => $records,
        ];

        return view('dashboard.print.nominee.index', $params);
    }

    public function filterNominee(Request $request)
    {
        $records = Nominee::orWhere([
            'owner_hr_id' => $request->owner_id,
            'nominee_hr_id' => $request->nominee_id,
        ])->get();
        $params = [
            'pageTitle' => __('general.print_nominee'),
            'records' => $records,
        ];

        return view('dashboard.print.nominee.index', $params);
    }

    public function printHr()
    {
        $records = Hr::select('id', 'first_name', 'last_name', 'cnic', 'cell_1', 'present_linear_address')->get();
        $params = [
            'pageTitle' => __('general.print_hr_persons'),
            'records' => $records,
        ];

        return view('dashboard.print.hr.index', $params);
    }

    public function filterHr(Request $request)
    {
        $records = Hr::select('id', 'first_name', 'last_name', 'cnic', 'cell_1', 'cell_2', 'present_linear_address')
            ->orWhere([
                'id' => $request->hr_id,
                'cnic' => $request->cnic,
                'cell_1' => $request->contact_id,
                'cell_2' => $request->contact_id,
                'nationality_id' => $request->nationality_id,
            ])->get();
        $params = [
            'pageTitle' => __('general.print_hr_persons'),
            'records' => $records,
        ];

        return view('dashboard.print.hr.index', $params);
    }

    public function printTitleTransferDetails(){
        $records = Sale::orderBy('date', 'asc')->get();
        $params = [
            'pageTitle' => __('general.title_transfer_print'),
            'records' => $records,
        ];

        return view('dashboard.print.title-transfer.index', $params);
    }

    public function getInstallmentDetails(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $installmentID = $request->get('installmentID');
            $record = Installment::findorFail($installmentID);
            $data = [
                'penaltyAmount' => GeneralService::calculateInstallmentPenaltyAmount($record),
                'installmentAmount' => $record->installment_amount,
                'installmentAmountFormatted' => GeneralService::number_format( $record->installment_amount ),
                'model' => $record,
            ];
            $output = ['success' => true, 'msg' => '', 'data' => $data];
        }
        return $output;
    }

    public function brokerDetails(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $brokerID = $request->get('brokerID'); ;

            $amountData = BrokerService::getBrokerAmounts($brokerID);
            $data = [
                'totalPayable' => $amountData['total'],
                'totalPaid' => $amountData['paid'],
                'lastPaid' => $amountData['lastPaid'],
                'remaining' => ($amountData['total'] - $amountData['paid']),

                'totalPayableFormatted' => GeneralService::number_format( $amountData['total'] ),
                'totalPaidFormatted' => GeneralService::number_format( $amountData['paid'] ),
                'lastPaidFormatted' => GeneralService::number_format( $amountData['lastPaid'] ),
                'remainingFormatted' => GeneralService::number_format( ($amountData['total'] - $amountData['paid']) ),
            ];
            $output = ['success' => true, 'msg' => '', 'data' => $data];
        }

        return $output;
    }

    public function createAccountHead() {
        $heads = AccountHead::where('IsGL',1)

            ->orderByRaw('PHeadName ASC, HeadName ASC')->get();

        $parentHeads = AccountsService::generalHeadsDropDown($heads);

        $params = [
            'parentHeads' => $parentHeads,
            'pageTitle' => __('general.create_account_head'),
        ];

        return view('dashboard.accounts.account-head.create', $params);
    }

    public function saveAccountHead(AccountHeadRequest $request) {
        if ($request->createData()) {
            return redirect()
                ->route('dashboard.create.account-head')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    public function navSearch(Request $request) {
        $entries = [
            route('dashboard.sales.create') => ( __('general.' . KeyWordEnum::TITLE_TRANSFER) ),
            route('dashboard.expenses.create') =>  (__('general.' . KeyWordEnum::EXPENSES) ),
            route('dashboard') => ( __('general.' . KeyWordEnum::DASHBOARD) ),
        ];
        $input = preg_quote($request->get('search'), '~');
        $result = preg_grep('~' . $input . '~', $entries);

        $jsonData = [];
        foreach ($result as $key => $value) {
            $jsonData[] = ['label' => Str::title($value), 'value' => $key];
        }
        return $jsonData;

    }
}
