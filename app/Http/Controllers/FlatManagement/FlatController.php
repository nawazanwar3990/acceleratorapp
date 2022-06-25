<?php

namespace App\Http\Controllers\FlatManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlatManagement\FloorNameRequest;
use App\Models\FlatManagement\Flat;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FlatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Flat::class);
        $records = Flat::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floor_names'),
            'records' => $records,
        ];
        return view('dashboard.definition.floors.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Flat::class);
        $params = [
            'pageTitle' => __('general.new_floor_names'),
        ];
        return view('dashboard.definition.floors.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FloorNameRequest $request)
    {
        $this->authorize('create', Flat::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.flats.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id)
    {
        $this->authorize('update', Flat::class);
        $model = Flat::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_floor_names'),
            'model' => $model,
        ];

        return view('dashboard.definition.floors.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FloorNameRequest $request, $id)
    {
        $this->authorize('update', Flat::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.flats.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(FloorNameRequest $request, $id)
    {
        $this->authorize('delete', Flat::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
