<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\PaymentReceipt;
use App\Services\PersonService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function logs($subscription_id): Factory|View|Application
    {
        $records = PaymentReceipt::with('subscription', 'subscribed');
        if ($subscription_id) {
            $records = $records->where('subscription_id', $subscription_id);
        }
        if (
            PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)
            ||
            PersonService::hasRole(RoleEnum::FREELANCER)
            ||
            PersonService::hasRole(RoleEnum::MENTOR)
        ) {
            $records = $records->where('subscribed_id', Auth::id());
        }
        $records = $records->get();
        $params = [
            'pageTitle' => __('general.receipts'),
            'records' => $records,
        ];
        return view('dashboard.payment-receipts.logs', $params);
    }
}
