<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\CountryRequest;
use App\Models\Definition\General\Country;
use App\Models\Definition\General\Province;
use App\Services\GeneralService;
use Illuminate\Http\Request;

class CountryController extends Controller
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
        $this->authorize('view', Country::class);
        $records = Country::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.country'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.country.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Country::class);
        $params = [
            'pageTitle' => __('general.new_country'),
        ];

        return view('dashboard.real-estate.definition.country.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CountryRequest $request)
    {
        $this->authorize('create', Country::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.country.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.country.index')
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
        $this->authorize('view', Country::class);
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
        $this->authorize('update', Country::class);
        $model = Country::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_country'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.country.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CountryRequest $request, $id)
    {
        $this->authorize('update', Country::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.country.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CountryRequest $request,$id)
    {
        $this->authorize('delete', Country::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.country.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getProvincesOfCountry(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('countryID')) {
                $countryID = $request->get('countryID');
                $records = Province::where('country_id', $countryID)->orderBy('name', 'ASC')->pluck('name', 'id');
                $output = ['success' => true, 'msg' => '', 'records' => GeneralService::flattenArrayToHtmlSelect($records, __('general.ph_province'))];
            }
        }

        return $output;
    }
}
