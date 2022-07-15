<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\DistrictRequest;
use App\Models\UserManagement\District;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', District::class);
        $records = District::with('province')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.district'),
            'records' => $records,
        ];
        return view('dashboard.user-management.district.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', District::class);
        $params = [
            'pageTitle' => __('general.new_district'),
        ];

        return view('dashboard.user-management.district.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(DistrictRequest $request)
    {
        $this->authorize('create', District::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.district.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', District::class);
        $model = District::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_district'),
            'model' => $model,
        ];
        return view('dashboard.user-management.district.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(DistrictRequest $request, $id)
    {
        $this->authorize('update', District::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.district.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(DistrictRequest $request, $id)
    {
        $this->authorize('delete', District::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.district.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
