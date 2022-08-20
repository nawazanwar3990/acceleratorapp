<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PaymentReceipt;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PaymentReceiptController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        $type = $request->input('type');
        $records = PaymentReceipt::where('is_processed', false)
            ->has('subscription')
            ->whereHas('subscribed', function ($query) use ($type) {
                $query->whereHas('roles', function ($q) use ($type) {
                    $q->where('slug', $type);
                });
            })->with('subscription', 'subscribed');
        if ($request->has('id')) {
            $id = $request->query('id');
            $records = $records->where('id', $id);
        }
        $records = $records->get();
        $params = [
            'pageTitle' => __('general.receipts'),
            'records' => $records,
        ];
        return view('dashboard.payment-receipts.index', $params);
    }
}
