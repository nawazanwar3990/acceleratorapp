<?php

namespace App\Http\Controllers\PackageManagement;

use App\Enum\RoleEnum;
use App\Enum\TableEnum;
use App\Http\Controllers\Controller;
use App\Models\PackageManagement\Package;
use App\Models\PackageManagement\Subscription;
use App\Models\PaymentManagement\Payment;
use App\Models\UserManagement\User;
use App\Services\GeneralService;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $this->authorize('view', Subscription::class);
        $records = Subscription::with(['subscribed', 'package']);
        if (request()->has('id')) {
            $records = $records->where('subscribed_id', request()->query('id'));
        } else {
            $records = $records->where('subscribed_id', auth()->id());
        }
        $records = $records->paginate(20);
        $params = [
            'pageTitle' => __('general.subscriptions'),
            'records' => $records,
        ];
        return view('dashboard.package-management.subscriptions.index', $params);
    }

    public function create(Request $request): Factory|View|Application
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        $packages = Package::with('duration_type');
        if ($user->hasRole(RoleEnum::ADMIN)) {
            $packages = $packages->where('created_by', 1)->get();
        }
        $params = [
            'pageTitle' => __('general.apply_subscription'),
            'packages' => $packages
        ];
        return view('dashboard.package-management.subscriptions.create', $params);
    }

    public function store(Request $request)
    {
        $package_id = $request->package_id;
        $subscribed_id = $request->subscribed_id;

        $payment_type = $request->payment_type;
        $transaction_id = $request->transaction_id;

        $package = Package::find($package_id);
        $limit = $package->duration_limit;
        $from_date = Carbon::now();
        $duration_type = $package->duration_type->slug;
        $subscription = new Subscription();
        $subscription->subscribed_id = $subscribed_id;
        $subscription->package_id = $package_id;
        $subscription->price = $package->price;
        $subscription->is_payed = true;
        $subscription->created_by = auth()->id();
        $subscription->renewal_date = Carbon::now();
        $subscription->expire_date = GeneralService::get_remaining_time($duration_type, $limit, $from_date);
        if ($subscription->save()) {
            DB::table(TableEnum::SUBSCRIPTION_LOGS)->insert([
                'subscribed_id' => $subscribed_id,
                'subscription_id' => $subscription->id,
                'package_id' => $package_id,
                'price' => $package->price,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            Payment::create([
                'subscribed_id' => $subscribed_id,
                'subscription_id' => $subscription->id,
                'package_id' => $package_id,
                'payment_type' => $payment_type,
                'transaction_id' => $transaction_id
            ]);
        }
        return response()->json([
            'status' => true,
            'route' => route('dashboard.subscriptions.index', ['id' => request()->query('id')])
        ]);
    }
}
