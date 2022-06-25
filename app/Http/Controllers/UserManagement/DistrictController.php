<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\DistrictRequest;
use App\Models\Definition\General\District;
use App\Models\Definition\General\Tehsil;
use App\Services\GeneralService;
use Illuminate\Http\Request;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', District::class);
        $records = District::with('province')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.district'),
            'records' => $records,
        ];
        return view('dashboard.definition.district.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', District::class);
        $params = [
            'pageTitle' => __('general.new_district'),
        ];

        return view('dashboard.definition.district.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DistrictRequest $request)
    {
        $this->authorize('create', District::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.district.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.district.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', District::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', District::class);
        $model = District::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_district'),
            'model' => $model,
        ];

        return view('dashboard.definition.district.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(DistrictRequest $request,$id)
    {
        $this->authorize('delete', District::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.district.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getTehsilsOfDistrict(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('districtID')) {
                $districtID = $request->get('districtID');
                $records = Tehsil::where('district_id', $districtID)->orderBy('name', 'ASC')->pluck('name', 'id');
                $output = ['success' => true, 'msg' => '', 'records' => GeneralService::flattenArrayToHtmlSelect($records, __('general.ph_tehsil'))];
            }
        }

        return $output;
    }
}
