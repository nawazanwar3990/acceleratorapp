<?php

namespace App\Services\RealEstate;

use App\Models\Accounts\AccountHead;
use App\Models\Accounts\Transaction;
use App\Models\RealEstate\Broker;
use App\Services\Accounts\QueryService;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BrokerService
{
    public static function convertHrToBrokerAccountHead($hrID) {
        $existingRecord = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'broker')->whereJsonContains('account_id', GeneralService::prepareForJson( [$hrID] ))
            ->first();
        if ($existingRecord) {
            return $existingRecord;
        }

        // Open as Payable
        return AccountHead::create([
            'HeadCode' => (new BrokerService)->nextBrokerHeadCode(),
            'HeadName' => GeneralService::createAccountHeadName($hrID),
            'PHeadName' => 'Brokery Payable',
            'HeadLevel' => '1',
            'IsActive' => '1',
            'IsTransaction' => '1',
            'IsGL' => '0',
            'HeadType' => 'L',
            'IsBudget' => '0',
            'IsDepreciation' => '0',
            'DepreciationRate' => '0',
            'building_id' => BuildingService::getBuildingId(),
            'account_type' => 'broker',
            'account_id' => [$hrID],
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
    }

    private function nextBrokerHeadCode(): String
    {
        $headCode = AccountHead::where('HeadLevel', 1)
            ->where('HeadCode', 'like',  '60200' . '%')
            ->max('HeadCode');
        if ($headCode != NULL) {
            return ($headCode + 1);
        }

        return "602000001";
    }

    public static function brokerLedger($request) {
        $brokerName = '';
        $ledger = [];
        $brokerAccounts = Broker::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->get()->pluck('hr.full_name', 'hr.id');

        if ($request->has('broker_id') &&  $request->get('broker_id') != '') {
            $brokerAccountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
                ->where('account_type', 'broker')->whereJsonContains('account_id', GeneralService::prepareForJson([ $request->get('broker_id') ]))->first();
            $ledger = Transaction::whereHas('accountHead', function ($query) use ($brokerAccountHead) {
                $query->where('HeadCode', $brokerAccountHead->HeadCode)->where('account_type', 'broker');
            });
            $brokerName =  $brokerAccountHead->HeadName;
            $ledger = $ledger->where('is_approve', 1)->where('building_id', BuildingService::getBuildingId());
            $ledger = QueryService::filterByDate($request, $ledger,'transactions', 'transaction-between');
            $ledger = $ledger->orderBy('vDate', 'ASC')->get();
        }

        return [
            'brokers' => $brokerAccounts,
            'brokerName' => $brokerName,
            'ledger' => $ledger,
        ];
    }

    public static function brokerReport($request) {
        $brokerAccounts = Broker::whereBuildingId(BuildingService::getBuildingId())->with('Hr')
            ->get()->pluck('hr.full_name', 'hr.id');

        if ($request->has('broker_id') && $request->filled('broker_id')) {
            $records = Broker::whereBuildingId(BuildingService::getBuildingId())
                ->where('id', $request->get('broker_id'))->get();
        } else {
            $records = Broker::whereBuildingId(BuildingService::getBuildingId())->get();
        }

        return [
            'brokers' => $brokerAccounts,
            'records' => $records,
            'startDate' => $request->filled('start_date') ? Carbon::parse($request->get('start_date')) : null,
            'endDate' => $request->filled('end_date') ? Carbon::parse($request->get('end_date')) : null,
        ];
    }

    public static function getBrokerAmounts($brokerHrID, $startDate = null, $endDate = null) {
        $arr = GeneralService::prepareForJson( [$brokerHrID] );
        $accountHead = AccountHead::whereBuildingId(BuildingService::getBuildingId())
            ->where('account_type', 'broker')->whereJsonContains('account_id', $arr)
            ->first();

        if ($accountHead) {
            $data = Transaction::whereBuildingId(BuildingService::getBuildingId())
                ->where('COAID', $accountHead->HeadCode)
                ->where('is_approve', true)
                ->selectRaw('IFNULL(sum(Credit), 0) totalAmount, IFNULL(sum(Debit), 0) paidAmount');
                if (!is_null($startDate) && !is_null($endDate)) {
                    $data = $data->where('vDate', '>=', $startDate)->where('vDate', '<=', $endDate);
                }
                $data = $data->first();

            $lastTransaction = Transaction::whereBuildingId(BuildingService::getBuildingId())
                ->where('COAID', $accountHead->HeadCode)
                ->where('Debit', '>', 0)
                ->orderBy('created_at', 'DESC')
                ->first();
            if (!$lastTransaction) {
                $lastTransaction = null;
            }
            return [
                'total' => $data->totalAmount,
                'paid' => $data->paidAmount,
                'lastPaid' => is_null($lastTransaction) ? '0' : $lastTransaction->Debit,
            ];
        }

        return [
            'total' => 0,
            'paid' => 0,
            'lastPaid' => 0,
        ];
    }
}
