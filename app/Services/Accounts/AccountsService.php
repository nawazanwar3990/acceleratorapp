<?php

namespace App\Services\Accounts;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Services\BuildingService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AccountsService
{
    public static function getPaymentAccountsForDropdown() {
//        return AccountHead::has('pettyCash')
        return AccountHead::orWhere('HeadCode', 'like', 102010 . '%')
            ->where('HeadCode', '!=', 1020102)
            ->pluck('HeadName', 'id');
    }

    public static function generalLedger($request) {
        $heads = AccountHead::where('IsGL',1)
            ->orderByRaw('PHeadName ASC, HeadName ASC')->get();
        $generalHeads = self::generalHeadsDropDown($heads);

        if ($request->has('general_head') && $request->has('transaction_head')) {
            $generalHeadCode = $request->get('general_head');
            $transactionCode = $request->get('transaction_head');

            $mainHeadName = AccountHead::where('HeadCode', $generalHeadCode)->first();
            $subHeadName = AccountHead::where('HeadCode', $transactionCode)->first();
            $headName = $mainHeadName->HeadName . ' [' . $subHeadName->HeadName . ']';

            $transactions = DB::table('transactions as t')
                ->leftJoin('account_heads as h', 'h.HeadCode', '=', 't.COAID')
                ->selectRaw('t.vNo, t.vDate, t.vType, t.Narration, t.Debit, t.Credit, t.is_approve, t.COAID, h.HeadName, h.PHeadName, h.HeadType')
                ->where(['t.is_approve' => 1, 't.COAID' => $transactionCode])
                ->where('t.vDate', '>=', Carbon::parse($request->start_date)->format('Y-m-d'))
                ->where('t.vDate', '<=', Carbon::parse($request->end_date)->format('Y-m-d'))
                ->where('t.building_id', BuildingService::getBuildingId())
                ->get();

            $preBalance = Transaction::selectRaw('sum(Debit) as preDebit, sum(Credit) as preCredit')
                ->where(['is_approve' => 1, 'COAID' => $transactionCode])
                ->where('vDate', '<', Carbon::parse($request->start_date)->format('Y-m-d'))
                ->where('building_id', BuildingService::getBuildingId())
                ->first();

            $openingBalance = ($preBalance->preDebit - $preBalance->preCredit);

            return [
                'generalHeads' => $generalHeads,
                'openingBalance' => $openingBalance,
                'startDate' => $request->get('start_date'),
                'endDate' => $request->get('end_date'),
                'transactions' => $transactions,
                'headName' => $headName,
            ];
        }

        return [
            'generalHeads' => $generalHeads,
        ];
    }

    public static function generalHeadsDropDown($headsCollection): array
    {
        $arrHeads = [];
        foreach($headsCollection as $accountHead) {
            if (!in_array($accountHead->PHeadName, $arrHeads)) {
                $arrHeads[$accountHead->PHeadName] = [];
            }
        }

        foreach($headsCollection as $accountHead) {
            if (!in_array($accountHead->HeadName, $arrHeads[$accountHead->PHeadName])) {
                $arrHeads[$accountHead->PHeadName][$accountHead->HeadCode] = $accountHead->HeadName;
            }
        }

        return $arrHeads;
    }

    public static function getTransactionHeadsOfGeneralHead($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $generalHeadCode = $request->get('generalHeadCode');
            $accountHead = AccountHead::where('HeadCode', $generalHeadCode)->first();

            $transactionHeads = AccountHead::where('PHeadName', $accountHead->HeadName)
                ->where('IsTransaction', 1)
                ->where(function ($query) {
                    $query->whereNull('building_id')->orWhere('building_id', BuildingService::getBuildingId());
                })
                ->get();

            $html = '<option value>' . __('general.ph_transaction_head') . '</option>';

            foreach ($transactionHeads as $data) {
                $html .= '<option value="' . $data->HeadCode . '">' . $data->HeadName . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'records' => $html];
        }

        return $output;
    }

    public static function getHeadName($id){

        $accountHead = AccountHead::where('HeadCode',$id)->first();
        return $accountHead->HeadName;

    }

    public static function paymentTypesForDropdown($id = null)
    {
        $data = [
            'debit' => __('general.debit'),
            'credit' => __('general.credit'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }
}
