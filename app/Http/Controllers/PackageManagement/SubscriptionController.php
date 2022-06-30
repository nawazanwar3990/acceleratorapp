<?php

namespace App\Http\Controllers\PackageManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageManagement\DurationRequest;
use App\Http\Requests\PackageManagement\PackageRequest;
use App\Http\Requests\WorkingSpace\FlatRequest;
use App\Models\PackageManagement\Duration;
use App\Models\PackageManagement\Package;
use App\Models\PackageManagement\Subscription;
use App\Models\WorkingSpace\Flat;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): Factory|View|Application
    {
        $vId = $request->query('id');
        $records = Subscription::with(['subscribed' => function ($q) use ($vId) {
            if ($vId) {
                $q->where('id', $vId);
            }
        }, 'package'])->where('created_by',auth()->id());
        $records = $records->paginate(20);
        $this->authorize('view', Subscription::class);
        $params = [
            'pageTitle' => __('general.subscriptions'),
            'records' => $records,
        ];
        return view('dashboard.package-management.subscriptions.index', $params);
    }
}
