<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkingSpace\FloorTypeRequest;
use App\Models\FloorType;
use App\Services\FloorService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FloorTypeController extends Controller
{
    public function __construct(
        private FloorService $floorService
    )
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', FloorType::class);
        $records = $this->floorService->listFloorTypeByPagination();
        $params = [
            'pageTitle' => __('general.floor_types'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.floor-types.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', FloorType::class);
        $params = [
            'pageTitle' => __('general.new_floor_types'),
        ];

        return view('dashboard.working-spaces.floor-types.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FloorTypeRequest $request)
    {
        $this->authorize('create', FloorType::class);
        if ($request->createData()) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.floor-types.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.floor-types.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', FloorType::class);
        $model = FloorType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_floor_types'),
            'model' => $model,
        ];

        return view('dashboard.working-spaces.floor-types.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FloorTypeRequest $request, $id)
    {
        $this->authorize('update', FloorType::class);
        if ($request->updateData($id)) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.floor-types.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.floor-types.index')
                    ->with('success', __('general.record_updated_successfully'));
            }

        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(FloorTypeRequest $request, int $id)
    {$this->authorize('delete', FloorType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floor-types.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
