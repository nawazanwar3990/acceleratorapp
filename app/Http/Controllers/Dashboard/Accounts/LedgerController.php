<?php

namespace App\Http\Controllers\Dashboard\Accounts;

use App\Http\Controllers\Controller;
use App\Services\Accounts\AccountsService;
use App\Services\RealEstate\BrokerService;
use App\Services\RealEstate\PurchaserService;
use App\Services\RealEstate\SellerService;
use Illuminate\Http\Request;
use function __;
use function view;

class LedgerController extends Controller
{
    public function sellerLedger(Request $request) {
        $data = SellerService::sellerLedger($request);
        $params = [
            'pageTitle' => __('general.seller_investor_ledger'),
            'sellers' => $data['sellers'],
            'sellerName' => $data['sellerName'],
            'records' => $data['ledger'],
        ];

        return view('dashboard.ledgers.seller', $params);
    }

    public function buyerLedger(Request $request) {
        $data = PurchaserService::purchaserLedger($request);
        $params = [
            'pageTitle' => __('general.buyer_ledger'),
            'buyers' => $data['purchasers'],
            'buyerName' => $data['purchaserName'],
            'records' => $data['ledger'],
        ];

        return view('dashboard.ledgers.buyer', $params);
    }

    public function brokerLedger(Request $request) {
        $data = BrokerService::brokerLedger($request);
        $params = [
            'pageTitle' => __('general.broker_ledger'),
            'brokers' => $data['brokers'],
            'brokerName' => $data['brokerName'],
            'records' => $data['ledger'],
        ];

        return view('dashboard.ledgers.broker', $params);
    }

    public function generalLedger(Request $request) {
        $data = AccountsService::generalLedger($request);
        if ($request->has('general_head') && $request->has('transaction_head')) {
            $params = [
                'pageTitle' => __('general.general_ledger'),
                'generalHeads' => $data['generalHeads'],
                'openingBalance' => $data['openingBalance'],
                'startDate' => $data['startDate'],
                'endDate' => $data['endDate'],
                'transactions' => $data['transactions'],
                'headName' => $data['headName'],
            ];
        } else {
            $params = [
                'pageTitle' => __('general.general_ledger'),
                'generalHeads' => $data['generalHeads'],
            ];
        }
        return view('dashboard.ledgers.general', $params);
    }

    public function getTransactionHeadsOfGeneralHead(Request $request) {
        return AccountsService::getTransactionHeadsOfGeneralHead($request);
    }
}
