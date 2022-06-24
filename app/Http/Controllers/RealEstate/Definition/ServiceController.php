<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\ServiceRequest;
use App\Models\RealEstate\Definition\Service;
use App\Services\RealEstate\BuildingService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view', Service::class);
        $records = Service::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.service'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.service.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize(\App\Enum\AbilityEnum::CREATE, Service::class);
        $params = [
            'pageTitle' => __('general.new_service'),
        ];
        return view('dashboard.real-estate.definition.service.create',compact('params'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceRequest $request)
    {
        // $this->authorize('create', Service::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.service.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.service.index')
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
        $this->authorize('view', Service::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update', Service::class);
        $model = Service::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_service'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.service.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ServiceRequest $request, $id)
    {
        // $this->authorize('update', Service::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.service.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ServiceRequest $request,$id)
    {
        // $this->authorize('delete', Service::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.service.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
