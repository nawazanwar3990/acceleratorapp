<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\FloorRequest;
use App\Models\WorkingSpace\Floor;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FloorController extends Controller
{
    use General;
    public function __construct()
    {
        $this->makeMultipleDirectories('floors', ['documents', 'images']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Floor::class);
        $records = Floor::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floors'),
            'records' => $records,
        ];
        return view('dashboard.working-space.floors.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Floor::class);
        $params = [
            'pageTitle' => __('general.new_floor'),
        ];

        return view('dashboard.working-space.floors.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FloorRequest $request)
    {
        $this->authorize('create', Floor::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Floor::class);
        $model = Floor::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_floor'),
            'model' => $model,
        ];

        return view('dashboard.working-space.floors.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FloorRequest $request, $id)
    {
        $this->authorize('update', Floor::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(FloorRequest $request, $id)
    {
        $this->authorize('delete', Floor::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floors.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
