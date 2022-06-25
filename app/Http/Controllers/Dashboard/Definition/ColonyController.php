<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\ColonyRequest;
use App\Models\Definition\General\Colony;
use App\Models\Definition\General\Country;
use App\Models\Definition\General\District;
use App\Models\Definition\General\Province;
use App\Models\Definition\General\Tehsil;
use App\Services\GeneralService;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class ColonyController extends Controller
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
        $this->authorize('view', Colony::class);
        $records = Colony::with('tehsil')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.colony'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.colony.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Colony::class);
        $params = [
            'pageTitle' => __('general.new_colony'),
        ];

        return view('dashboard.real-estate.definition.colony.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ColonyRequest $request)
    {
        $this->authorize('create', Colony::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.colony.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.colony.index')
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
        $this->authorize('view', Colony::class);
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
        $this->authorize('update', Colony::class);
        $model = Colony::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_colony'),
            'model' => $model,
        ];
        return view('dashboard.real-estate.definition.colony.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ColonyRequest $request, $id)
    {
        $this->authorize('update', Colony::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.colony.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ColonyRequest $request,$id)
    {
        $this->authorize('delete', Colony::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.colony.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getAddressOfColony(Request $request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('colonyID')) {
                $colonyID = $request->get('colonyID');
                $selectedColony = Colony::find($colonyID);
                $selectedTehsil = Tehsil::find($selectedColony->tehsil_id);
                $selectedDistrict = District::find($selectedTehsil->district_id);
                $selectedProvince = Province::find($selectedDistrict->province_id);
                $selectedCountry = Country::find($selectedProvince->country_id);

                $allProvince = Province::orderBy('name', 'ASC')->pluck('name', 'id');
                $allDistrict = District::orderBy('name', 'ASC')->pluck('name', 'id');
                $allTehsil = Tehsil::orderBy('name', 'ASC')->pluck('name', 'id');

                $output = ['success' => true, 'msg' => '',
                    'records' => [
                        'provinces' => GeneralService::flattenArrayToHtmlSelect($allProvince, __('general.ph_province'), $selectedProvince->id),
                        'districts' => GeneralService::flattenArrayToHtmlSelect($allDistrict, __('general.ph_city_district'), $selectedDistrict->id),
                        'tehsils' => GeneralService::flattenArrayToHtmlSelect($allTehsil, __('general.ph_tehsil'), $selectedTehsil->id),
                        'countryID' => $selectedCountry->id,
                    ]];
            }
        }
        return $output;
    }
}
