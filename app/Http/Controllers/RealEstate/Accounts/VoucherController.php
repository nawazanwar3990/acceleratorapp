<?php

namespace App\Http\Controllers\RealEstate\Accounts;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Accounts\BrokerPaymentVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\BuyerInstallmentReceivingVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\BuyerReceivingVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\CreditVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\DebitVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\OpeningBalanceVoucherRequest;
use App\Http\Requests\RealEstate\Accounts\SellerPaymentVoucherRequest;
use App\Models\Accounts\AccountHead;
use App\Models\Broker;
use App\Models\Flat;
use App\Models\FlatOwner;
use App\Models\Sales\Installment;
use App\Services\Accounts\AccountsService;
use App\Services\GeneralService;
use App\Services\RealEstate\BuildingService;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function buyerCashReceiving() {
        $flatRecords = Flat::whereBuildingId(BuildingService::getBuildingId())
            ->where('sales_status', 'in-execution')->get();
        $params = [
            'pageTitle' => __('general.buyer_cash_receiving_voucher'),
            'flatRecords' => $flatRecords
        ];
        return view('dashboard.real-estate.vouchers.buyer-receiving', $params);
    }

    public function saveBuyerCashReceiving(BuyerReceivingVoucherRequest $request) {

        if ($request->saveTransaction()) {
            if ($request->doPrint) {

            } else {
                return redirect()->route('dashboard.voucher.buyer-receiving')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function buyerInstallmentReceiving() {
        $flatRecords = Flat::whereBuildingId(BuildingService::getBuildingId())
            ->where('sales_status', 'in-execution')->get();
        $params = [
            'pageTitle' => __('general.buyer_installment_receiving_voucher'),
            'flatRecords' => $flatRecords
        ];
        return view('dashboard.real-estate.vouchers.buyer-installment-receiving', $params);
    }

    public function saveBuyerInstallmentReceiving(BuyerInstallmentReceivingVoucherRequest $request) {
        $installmentRecord = $request->saveTransaction();
        if ($installmentRecord) {
            if ($request->doPrint) {
                return redirect()->route('dashboard.print-buyer-installment-receiving', ['installment-no' => $installmentRecord->id]);
            } else {
                return redirect()->route('dashboard.voucher.buyer-installment-receiving')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function printBuyerInstallmentReceiving(Request $request) {
        $installment = Installment::whereBuildingId(BuildingService::getBuildingId())->findorFail($request->get('installment-no'));

        $buyers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())
            ->where('flat_id', $installment->flat_id)->where('sale_id', $installment->sale_id)
            ->where('status', true)->pluck('hr_id')->toArray();

        $buyers = GeneralService::prepareForJson($buyers);

        $accountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Account Payable')
            ->whereJsonContains('account_id', $buyers)->first();

        $params = [
            'pageTitle' => __('general.installment_payment_receipt'),
            'installment' => $installment,
            'accountHead' => $accountHead,
        ];
        return view('dashboard.real-estate.vouchers.print.buyer-installment-receiving', $params);
    }

    public function sellerPayment() {

    }

    public function saveSellerPayment(SellerPaymentVoucherRequest $request) {

    }

    public function brokerPayment() {
        $brokers = Broker::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->get()->pluck('hr.full_name', 'hr.id');
        $params = [
            'pageTitle' => __('general.broker_payment_voucher'),
            'brokers' => $brokers
        ];
        return view('dashboard.real-estate.vouchers.broker-payment', $params);
    }

    public function saveBrokerPayment(BrokerPaymentVoucherRequest $request) {
        $data = $request->saveTransaction();
        if ($data) {
            if ($request->doPrint) {
                return redirect()->route('dashboard.print-broker-payment', ['voucher-no' => $data->id]);
            } else {
                return redirect()->route('dashboard.voucher.broker-payment')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function printBrokerPayment(Request $request) {

    }

    public function debitVoucher() {

        $heads = AccountHead::where('IsActive',1)->where('IsTransaction',1)

            ->orderByRaw('PHeadName ASC, HeadName ASC')->get();
        $accountHeads = AccountsService::generalHeadsDropDown($heads);

        $paymentAccounts = AccountHead::where('HeadCode', 'like', 102010 . '%')
            ->where('HeadCode', '!=', 1020102)
            ->pluck('HeadName','HeadCode');

        $params = [
            'accountHeads' => $accountHeads,
            'paymentAccounts' => $paymentAccounts,
            'pageTitle' => __('general.debit_voucher'),
        ];
        return view('dashboard.real-estate.vouchers.debit', $params);
    }

    public function saveDebitVoucher(DebitVoucherRequest $request) {
        $data = $request->saveTransaction();
        if ($data) {
            if ($request->doPrint) {

            } else {
                return redirect()->route('dashboard.voucher.debit')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function creditVoucher() {
        $heads = AccountHead::where('IsActive',1)->where('IsTransaction',1)

            ->orderByRaw('PHeadName ASC, HeadName ASC')->get();
        $accountHeads = AccountsService::generalHeadsDropDown($heads);

        $paymentAccounts = AccountHead::where('HeadCode', 'like', 102010 . '%')
            ->where('HeadCode', '!=', 1020102)
            ->pluck('HeadName','HeadCode');

        $params = [
            'accountHeads' => $accountHeads,
            'paymentAccounts' => $paymentAccounts,
            'pageTitle' => __('general.credit_voucher'),
        ];
        return view('dashboard.real-estate.vouchers.credit', $params);
    }

    public function saveCreditVoucher(CreditVoucherRequest $request) {
        $data = $request->saveTransaction();
        if ($data) {
            if ($request->doPrint) {

            } else {
                return redirect()->route('dashboard.voucher.credit')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function openingBalanceVoucher() {
        $heads = AccountHead::where('IsActive',1)

            ->orderByRaw('PHeadName ASC, HeadName ASC')->get();
        $accountHeads = AccountsService::generalHeadsDropDown($heads);

        $params = [
            'accountHeads' => $accountHeads,
            'pageTitle' => __('general.opening_balance_voucher'),
        ];
        return view('dashboard.real-estate.vouchers.opening-balance', $params);
    }

    public function saveOpeningBalanceVoucher(OpeningBalanceVoucherRequest $request) {
        $data = $request->saveTransaction();
        if ($data) {
            if ($request->doPrint) {

            } else {
                return redirect()->route('dashboard.voucher.opening-balance')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
}
