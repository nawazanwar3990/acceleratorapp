<?php

namespace App\Http\Controllers\RealEstate\FrontDesk\FrontDeskSetup;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup\PurposeRequest;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\Purpose;
use Illuminate\Http\Request;

class PurposeController extends Controller
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
        $this->authorize('view', Purpose::class);
        $records = Purpose::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.purpose_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.front-desk-setup.purpose.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Purpose::class);
        $params = [
            'pageTitle' => __('general.purpose_create'),
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.purpose.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PurposeRequest $request)
    {
        $this->authorize('create', Purpose::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.purpose.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.purpose.index')
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
        $this->authorize('view', Purpose::class);
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
        $this->authorize('update', Purpose::class);
        $model = Purpose::findorFail($id);

        $params = [
            'pageTitle' => __('general.purpose_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.purpose.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PurposeRequest $request, $id)
    {
        $this->authorize('update', Purpose::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.purpose.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PurposeRequest $request,int $id)
    {
        $this->authorize('delete', Purpose::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.purpose.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
