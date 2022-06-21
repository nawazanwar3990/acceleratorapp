<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\RealEstate\FlatOwner;
use App\Models\RealEstate\Sales\Sale;
use App\Services\GeneralService;

class SalesService
{
    public static function getPaymentTypeViewForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '';
        if ($request->ajax()) {
            if ($request->has('viewCode')) {
                $viewCode = $request->get('viewCode');
                switch ($viewCode) {
                    case '1-1':
                        $html = view('dashboard.real-estate.sales.components.payment-method.onetime-cash')->render();
                        break;
                    case '1-2':
                        $html = view('dashboard.real-estate.sales.components.payment-method.onetime-commodity')->render();
                        break;
                    case '1-3':
                        $html = view('dashboard.real-estate.sales.components.payment-method.onetime-cash-commodity')->render();
                        break;
                    case '2-1':
                        $html = view('dashboard.real-estate.sales.components.payment-method.installment-cash')->render();
                        break;
                    case '2-2':
                        $html = view('dashboard.real-estate.sales.components.payment-method.installment-commodity')->render();
                        break;
                }
                $output = ['success' => true, 'msg' => '', 'data' => $html];
            }
        }

        return $output;
    }

    public static function salesReceivedAmount($salesID, $useDiscountVouchers = true)
    {
        $salesRecord = Sale::whereBuildingId(BuildingService::getBuildingId())->findorFail($salesID);

        $buyers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())
            ->where('flat_id', $salesRecord->flat->id)->where('sale_id', $salesRecord->id)
            ->where('status', true)->pluck('hr_id')->toArray();

        $buyers = GeneralService::prepareForJson($buyers);
        $buyerAccountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Account Payable')
            ->whereJsonContains('account_id', $buyers)->first();

        $amount = Transaction::where('COAID', $buyerAccountHead->HeadCode)->whereHas('flat',function($query) use ($salesRecord) {
            $query->where(['id' => $salesRecord->flat_id]);
        });
        if ($useDiscountVouchers) {
            $amount = $amount->whereNotIn('vType', ['Discount', 'Title-Transfer']);
        }
        $amount = $amount->selectRaw('IFNULL(sum(Credit), 0) received_amount')->first();

        $lastTransaction = Transaction::where('COAID', $buyerAccountHead->HeadCode)->where('flat_id', $salesRecord->flat_id)
            ->where('Credit', '>', 0)
            ->whereNotIn('vType', ['Discount', 'Title-Transfer'])
            ->orderBy('created_at', 'DESC')
            ->first();

        return [
            'received' => $amount->received_amount,
            'lastReceived' => is_null($lastTransaction->Credit) ? '0' : $lastTransaction->Credit,
            'model' => $salesRecord,
        ];
    }

    public static function salesRemainingAmount($salesID) {
        $data = self::salesReceivedAmount($salesID);
        $receivedAmount = $data['received'];
        $totalAmount = $data['model']->after_discount_amount;
        return ($totalAmount - $receivedAmount);
    }

    public static function salesPendingCollection($request) {
        $records = Sale::whereBuildingId(BuildingService::getBuildingId())->with('installments')
            ->where('status', 'open')->get();

        return [
            'records' => $records,
        ];
    }

    public static function salesTransactions($salesID, $useDiscountVouchers = true) {
        $salesRecord = Sale::whereBuildingId(BuildingService::getBuildingId())->findorFail($salesID);

        $buyers = FlatOwner::whereBuildingId(BuildingService::getBuildingId())
            ->where('flat_id', $salesRecord->flat->id)->where('sale_id', $salesRecord->id)
            ->where('status', true)->pluck('hr_id')->toArray();

        $buyers = GeneralService::prepareForJson($buyers);
        $buyerAccountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Account Payable')
            ->whereJsonContains('account_id', $buyers)->first();

        $amount = Transaction::where('COAID', $buyerAccountHead->HeadCode)->whereHas('flat',function($query) use ($salesRecord) {
            $query->where(['id' => $salesRecord->flat_id]);
        });
        if ($useDiscountVouchers) {
            $amount = $amount->whereNotIn('vType', ['Discount', 'Title-Transfer']);
        }
        return $amount->get();
    }

    public static function getCommodityTypeViewForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '';
        if ($request->ajax()) {
            if ($request->has('viewCode')) {
                $viewCode = $request->get('viewCode');
                $html = match ($viewCode) {
                    'fixed' => view('dashboard.real-estate.sales.components.payment-method.commodity-types.fixed')->render(),
                    'other' => view('dashboard.real-estate.sales.components.payment-method.commodity-types.other')->render(),
                    'movable' => view('dashboard.real-estate.sales.components.payment-method.commodity-types.movable')->render(),
                };
                $output = ['success' => true, 'msg' => '', 'data' => $html];
            }
        }

        return $output;
    }
}
