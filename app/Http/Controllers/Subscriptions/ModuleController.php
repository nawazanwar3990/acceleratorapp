<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageManagement\ModuleRequest;
use App\Models\SubscriptionManagement\Module;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        //$this->authorize('view', Module::class);
        $records = Module::all();
        $params = [
            'pageTitle' => __('general.modules'),
            'records' => $records,
        ];
        return view('dashboard.subscription-management.modules.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Module::class);
        $params = [
            'pageTitle' => __('general.new_module'),
        ];
        return view('dashboard.subscription-management.modules.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(ModuleRequest $request)
    {
        $this->authorize('create', Module::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.modules.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Module::class);
        $model = Module::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_module'),
            'model' => $model,
        ];

        return view('dashboard.subscription-management.modules.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(ModuleRequest $request, $id)
    {
        $this->authorize('update', Module::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.modules.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(ModuleRequest $request, $id)
    {
        $this->authorize('delete', Module::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.modules.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
