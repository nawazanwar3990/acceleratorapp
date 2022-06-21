<?php

namespace App\Http\Controllers\RealEstate\FrontDesk\FrontDeskSetup;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup\ComplainTypeRequest;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\ComplainType;
use Illuminate\Http\Request;

class ComplainTypeController extends Controller
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
        $this->authorize('view', ComplainType::class);
        $records = ComplainType::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.complain_type_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.front-desk-setup.complain-type.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', ComplainType::class);
        $params = [
            'pageTitle' => __('general.complain_type_create'),
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.complain-type.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ComplainTypeRequest $request)
    {
        $this->authorize('create', ComplainType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.complain-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.complain-type.index')
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
        $this->authorize('view', ComplainType::class);
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
        $this->authorize('update', ComplainType::class);
        $model = ComplainType::findorFail($id);

        $params = [
            'pageTitle' => __('general.complain_type_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.complain-type.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ComplainTypeRequest $request, $id)
    {
        $this->authorize('update', ComplainType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.complain-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ComplainTypeRequest $request, int $id)
    {
        $this->authorize('delete', ComplainType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.complain-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
