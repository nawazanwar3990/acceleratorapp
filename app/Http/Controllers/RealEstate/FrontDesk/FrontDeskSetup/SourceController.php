<?php

namespace App\Http\Controllers\RealEstate\FrontDesk\FrontDeskSetup;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup\SourceRequest;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
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
        $this->authorize('view', Source::class);
        $records = Source::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.source_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.front-desk-setup.source.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Source::class);
        $params = [
            'pageTitle' => __('general.source_create'),
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.source.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SourceRequest $request)
    {
        $this->authorize('create', Source::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.source.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.source.index')
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
        $this->authorize('view', Source::class);
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
        $this->authorize('update', Source::class);
        $model = Source::findorFail($id);

        $params = [
            'pageTitle' => __('general.complain_type_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.front-desk-setup.source.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SourceRequest $request, $id)
    {
        $this->authorize('update', Source::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.source.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SourceRequest $request, int $id)
    {
        $this->authorize('delete', Source::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.source.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
