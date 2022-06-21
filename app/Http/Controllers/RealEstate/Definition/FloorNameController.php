<?php

namespace App\Http\Controllers\RealEstate\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\FloorNameRequest;
use App\Models\RealEstate\Definition\FloorName;
use App\Services\RealEstate\BuildingService;
use Illuminate\Http\Request;

class FloorNameController extends Controller
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
        $this->authorize('view', FloorName::class);
        $records = FloorName::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floor_names'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.definition.floor-name.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', FloorName::class);
        $params = [
            'pageTitle' => __('general.new_floor_names'),
        ];

        return view('dashboard.real-estate.definition.floor-name.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FloorNameRequest $request)
    {
        $this->authorize('create', FloorName::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.floor-name.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.floor-name.index')
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
        $this->authorize('view', FloorName::class);
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
        $this->authorize('update', FloorName::class);
        $model = FloorName::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_floor_names'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.definition.floor-name.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FloorNameRequest $request, $id)
    {
        $this->authorize('update', FloorName::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.floor-name.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(FloorNameRequest $request,$id)
    {
        $this->authorize('delete', FloorName::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floor-name.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
