<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\TehsilRequest;
use App\Models\Definition\General\Colony;
use App\Models\Definition\General\Tehsil;
use App\Services\GeneralService;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class TehsilController extends Controller
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
        $this->authorize('view', Tehsil::class);
        $records = Tehsil::with('district')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.tehsil'),
            'records' => $records,
        ];
        return view('dashboard.definition.tehsil.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Tehsil::class);
        $params = [
            'pageTitle' => __('general.new_tehsil'),
        ];

        return view('dashboard.definition.tehsil.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TehsilRequest $request)
    {
        $this->authorize('create', Tehsil::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.tehsil.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.tehsil.index')
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
        $this->authorize('view', Tehsil::class);
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
        $this->authorize('update', Tehsil::class);
        $model = Tehsil::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_tehsil'),
            'model' => $model,
        ];
        return view('dashboard.definition.tehsil.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TehsilRequest $request, $id)
    {
        $this->authorize('update', Tehsil::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.tehsil.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(TehsilRequest $request,$id)
    {
        $this->authorize('delete', Tehsil::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.tehsil.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getColoniesOfTehsil(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('tehsilID')) {
                $tehsilID = $request->get('tehsilID');
                $records = Colony::where('tehsil_id', $tehsilID)->orderBy('name', 'ASC')->pluck('name', 'id');
                $output = ['success' => true, 'msg' => '', 'records' => GeneralService::flattenArrayToHtmlSelect($records, __('general.ph_colony'))];
            }
        }

        return $output;
    }
}
