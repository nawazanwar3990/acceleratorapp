<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Definition\FloorTypeRequest;
use App\Models\Definition\FloorType;
use function __;
use function redirect;
use function view;

class FloorTypeController extends Controller
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
        $this->authorize('view', FloorType::class);
        $records = FloorType::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floor_types'),
            'records' => $records,
        ];
        return view('dashboard.definition.floor-type.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', FloorType::class);
        $params = [
            'pageTitle' => __('general.new_floor_types'),
        ];

        return view('dashboard.definition.floor-type.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FloorTypeRequest $request)
    {
        $this->authorize('create', FloorType::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.floor-type.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.floor-type.index')
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
        $this->authorize('view', FloorType::class);
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
        $this->authorize('update', FloorType::class);
        $model = FloorType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_floor_types'),
            'model' => $model,
        ];

        return view('dashboard.definition.floor-type.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FloorTypeRequest $request, $id)
    {
        $this->authorize('update', FloorType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.floor-type.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(FloorTypeRequest $request,int $id)
    {$this->authorize('delete', FloorType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floor-type.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
