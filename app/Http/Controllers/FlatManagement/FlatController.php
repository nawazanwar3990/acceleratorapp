<?php

namespace App\Http\Controllers\FlatManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlatManagement\FlatRequest;
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
        return view('dashboard.flat-management.flat.index',$params);
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
        return view('dashboard.flat-management.flat.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FlatRequest $request)
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
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Flat::class);
        $model = Flat::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_flat'),
            'model' => $model,
        ];

        return view('dashboard.flat-management.flat.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FlatRequest $request, $id)
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
    public function destroy(FlatRequest $request, $id)
    {
        $this->authorize('delete', Flat::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.flats.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
