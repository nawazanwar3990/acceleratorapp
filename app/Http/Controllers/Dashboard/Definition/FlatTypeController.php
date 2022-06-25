<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\FlatTypeRequest;
use App\Models\Definition\General\FlatType;
use function __;
use function redirect;
use function view;

class FlatTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', FlatType::class);
        $records = FlatType::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.flat_types'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.flat-type.index',$params);
    }

    public function create()
    {
        $this->authorize('create', FlatType::class);
        $params = [
            'pageTitle' => __('general.new_flat_types'),
        ];

        return view('dashboard.real-estate.definition.flat-type.create', $params);
    }

    public function store(FlatTypeRequest $request)
    {
        $this->authorize('create', FlatType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.flat-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.flat-type.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', FlatType::class);
        //
    }

    public function edit($id)
    {
        $this->authorize('update', FlatType::class);
        $model = FlatType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_flat_types'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.flat-type.edit', $params);
    }

    public function update(FlatTypeRequest $request, $id)
    {
        $this->authorize('update', FlatType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.flat-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(FlatTypeRequest $request, $id)
    {
        $this->authorize('delete', FlatType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.flat-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
