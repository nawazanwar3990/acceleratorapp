<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Services\Accounts\QueryService;
use App\Services\GeneralService;
use Illuminate\Support\Facades\Auth;

class PurchaserService
{
    public static function convertHrToPurchaserAccountHead($hrID) {
        $existingRecord = AccountHead::where('account_type', 'SP')->where('PHeadName', 'Account Payable')->whereJsonContains('account_id', $hrID)
            ->first();
        if ($existingRecord) {
            return $existingRecord;
        }


        // Open as Receivable
        return AccountHead::create([
            'HeadCode' => (new PurchaserService)->nextPurchaserHeadCode(),
            'HeadName' => GeneralService::createAccountHeadName($hrID),
            'PHeadName' => 'Account Payable',
            'HeadLevel' => '3',
            'IsActive' => '1',
            'IsTransaction' => '1',
            'IsGL' => '0',
            'HeadType' => 'L',
            'IsBudget' => '0',
            'IsDepreciation' => '0',
            'DepreciationRate' => '0',
            'building_id' => BuildingService::getBuildingId(),
            'account_type' => 'SP',
            'account_id' => $hrID,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
    }

    private function nextPurchaserHeadCode(): String
    {
        $headCode = AccountHead::where('HeadLevel', 3)
            ->where('HeadCode', 'like',  '50202' . '%')
            ->max('HeadCode');
        if ($headCode != NULL) {
            return ($headCode + 1);
        }

        return "502020001";
    }

    public static function purchaserLedger($request)
    {
        $purchaserName = '';
        $purchaserAccounts = AccountHead::where('account_type', 'SP')->where('PHeadName', 'Account Payable')->pluck('HeadName', 'HeadCode');

        if ($request->has('buyer_id') &&  $request->get('buyer_id') != '') {

            $ledger = Transaction::whereHas('accountHead', function ($query) use ($request) {
                $query->where('HeadCode', $request->buyer_id)->where('account_type', 'SP')
                    ->where('PHeadName', 'Account Payable');
            });
            $purchaserName =  AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('HeadCode', $request->get('buyer_id'))->value('HeadName');
        } else {
            $ledger = Transaction::whereHas('accountHead', function ($query) {
                $query->whereNotNull('account_id')->where('account_type', 'SP')
                    ->where('PHeadName', 'Account Payable');
            });
        }
        $ledger = $ledger->where('is_approve', 1)->where('building_id', BuildingService::getBuildingId());
        $ledger = QueryService::filterByDate($request, $ledger,'transactions', 'transaction-between');
        $ledger = $ledger->orderBy('vDate', 'ASC')->get();
        return [
            'purchasers' => $purchaserAccounts,
            'purchaserName' => $purchaserName,
            'ledger' => $ledger,
        ];
    }
}
