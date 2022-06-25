<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\ServiceRequest;
use App\Models\Definition\Service;
use function __;
use function redirect;
use function view;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function create()
    {
        // $this->authorize(\App\Enum\AbilityEnum::CREATE, Service::class);
        $params = [
            'pageTitle' => __('general.new_service'),
        ];
        return view('dashboard.real-estate.definition.service.create',compact('params'));
    }


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


    public function show($id)
    {
        $this->authorize('view', Service::class);
        //
    }


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


    public function update(ServiceRequest $request, $id)
    {
        // $this->authorize('update', Service::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.service.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(ServiceRequest $request,$id)
    {
        // $this->authorize('delete', Service::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.service.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
