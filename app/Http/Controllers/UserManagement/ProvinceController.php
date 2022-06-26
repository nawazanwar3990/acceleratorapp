<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\ProvinceRequest;
use App\Models\UserManagement\District;
use App\Models\UserManagement\Province;
use App\Services\GeneralService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class ProvinceController extends Controller
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
        $this->authorize('view', Province::class);
        $records = Province::with('country')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.province'),
            'records' => $records,
        ];
        return view('dashboard.user-management.province.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Province::class);
        $params = [
            'pageTitle' => __('general.new_province'),
        ];

        return view('dashboard.user-management.province.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(ProvinceRequest $request)
    {
        $this->authorize('create', Province::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.province.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id)
    {
        $this->authorize('update', Province::class);
        $model = Province::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_province'),
            'model' => $model,
        ];
        return view('dashboard.user-management.province.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(ProvinceRequest $request, $id)
    {
        $this->authorize('update', Province::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.province.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(ProvinceRequest $request, $id)
    {
        $this->authorize('delete', Province::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.province.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getDistrictsOfProvince(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('provinceID')) {
                $provinceID = $request->get('provinceID');
                $records = District::where('province_id', $provinceID)->orderBy('name', 'ASC')->pluck('name', 'id');
                $output = ['success' => true, 'msg' => '', 'records' => GeneralService::flattenArrayToHtmlSelect($records, __('general.ph_city_district'))];
            }
        }

        return $output;
    }
}
