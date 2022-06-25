<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\ProvinceRequest;
use App\Models\Definition\General\District;
use App\Models\Definition\General\Province;
use App\Services\GeneralService;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', Province::class);
        $records = Province::with('country')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.province'),
            'records' => $records,
        ];
        return view('dashboard.definition.province.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Province::class);
        $params = [
            'pageTitle' => __('general.new_province'),
        ];

        return view('dashboard.definition.province.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProvinceRequest $request)
    {
        $this->authorize('create', Province::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.province.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.province.index')
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
        $this->authorize('view', Province::class);
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
        $this->authorize('update', Province::class);
        $model = Province::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_province'),
            'model' => $model,
        ];

        return view('dashboard.definition.province.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ProvinceRequest $request,$id)
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
