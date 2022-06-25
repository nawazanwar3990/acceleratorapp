<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Services\Accounts\QueryService;
use App\Services\GeneralService;
use Illuminate\Support\Facades\Auth;

class SellerService
{
    public static function convertHrToSellerAccountHead($hrID) {

        $existingRecord = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Customer Receivable')->whereJsonContains('account_id', $hrID)
            ->first();
        if ($existingRecord) {
            return $existingRecord;
        }



        // Open as Payable
        return AccountHead::create([

            'HeadCode' => (new SellerService)->nextSellerHeadCode(),
            'HeadName' => GeneralService::createAccountHeadName($hrID),
            'PHeadName' => 'Customer Receivable',
            'HeadLevel' => '4',
            'IsActive' => '1',
            'IsTransaction' => '1',
            'IsGL' => '0',
            'HeadType' => 'A',
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

    private function nextSellerHeadCode(): String
    {
        $headCode = AccountHead::where('HeadLevel',4)
            ->where('HeadCode', 'like',  '1020301' . '%')
            ->max('HeadCode');
        if ($headCode != NULL) {
            return ($headCode + 1);
        }

        return "10203010001";
    }

    public static function sellerLedger($request) {
        $sellerName = '';
        $sellerAccounts = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'SP')->where('PHeadName', 'Customer Receivable')->pluck('HeadName', 'HeadCode');

        if ($request->has('seller_account') &&  $request->get('seller_account') != '') {

            $ledger = Transaction::whereHas('accountHead', function ($query) use ($request) {
                $query->where('HeadCode', $request->seller_id)->where('account_type', 'SP')
                    ->where('PHeadName', 'Customer Receivable');
            });
            $sellerName =  AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('HeadCode', $request->get('seller_id'))->value('HeadName');
        } else {
            $ledger = Transaction::whereHas('accountHead', function ($query) {
                $query->whereNotNull('account_id')->where('account_type', 'SP')
                    ->where('PHeadName', 'Customer Receivable');
            });
        }
        $ledger = $ledger->where('is_approve', 1)->where('building_id', BuildingService::getBuildingId());
        $ledger = QueryService::filterByDate($request, $ledger,'transactions', 'transaction-between');
        $ledger = $ledger->orderBy('vDate', 'ASC')->get();
        return [
            'sellers' => $sellerAccounts,
            'sellerName' => $sellerName,
            'ledger' => $ledger,
        ];
    }
}
