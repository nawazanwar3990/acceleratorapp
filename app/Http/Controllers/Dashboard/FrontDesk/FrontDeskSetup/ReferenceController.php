<?php

namespace App\Http\Controllers\Dashboard\FrontDesk\FrontDeskSetup;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup\ReferenceRequest;
use App\Models\FrontDesk\FrontDeskSetup\Reference;
use function __;
use function redirect;
use function view;

class ReferenceController extends Controller
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
        $this->authorize('view', Reference::class);
        $records = Reference::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.reference_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.front-desk-setup.reference.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Reference::class);
        $params = [
            'pageTitle' => __('general.reference_create'),
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.reference.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ReferenceRequest $request)
    {
        $this->authorize('create', Reference::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.reference.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.reference.index')
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
        $this->authorize('view', Reference::class);
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
        $this->authorize('update', Reference::class);
        $model = Reference::findorFail($id);

        $params = [
            'pageTitle' => __('general.reference_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.reference.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ReferenceRequest $request, $id)
    {
        $this->authorize('update', Reference::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.reference.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ReferenceRequest $request ,int $id)
    {
        $this->authorize('delete', Reference::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.reference.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
