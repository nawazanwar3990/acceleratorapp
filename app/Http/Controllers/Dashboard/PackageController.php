<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function auth;
use function redirect;
use function view;

class PackageController extends Controller
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
        $this->authorize('view', Package::class);
        $payment = $request->query('payment');
        $type = $request->query('type');
        $records = Package::with('duration_type')
            ->where('type', $type)
            ->where('payment_process', $payment)
            ->paginate(20);
        $params = [
            'pageTitle' => __('general.packages'),
            'records' => $records,
            'type' => $type,
            'payment' => $payment
        ];
        return view('dashboard.packages.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(Request $request): Factory|View|Application
    {
        $this->authorize('create', Package::class);
        $type = $request->input('type');
        $params = [
            'pageTitle' => __('general.new_package'),
            'type' => $type
        ];
        return view('dashboard.packages.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(PackageRequest $request)
    {
        $this->authorize('create', Package::class);
        $type = $request->input('type');
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.packages.create', ['type' => $type])
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.packages.index', ['type' => $type])
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Package::class);
        $model = Package::with('services')->findorFail($id);
        $type = $model->type;
        $params = [
            'pageTitle' => __('general.edit_package'),
            'model' => $model,
            'type' => $type
        ];

        return view('dashboard.packages.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(PackageRequest $request, $id)
    {
        $type = $request->input('type');
        $this->authorize('update', Package::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.packages.index', ['type' => $type])
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(PackageRequest $request, $id)
    {
        $this->authorize('delete', Package::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.packages.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function sendRenewalRequest(): RedirectResponse
    {
        return redirect()
            ->back()
            ->with('success', 'Renewal Request has send to admin you will receive notification while Approval');
    }
}
