<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\BuildingRequest;
use App\Models\WorkingSpace\Building;
use App\Services\BuildingService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BuildingController extends Controller
{
    use General;
    public function __construct(
        private BuildingService $buildingService
    )
    {
        $this->makeMultipleDirectories('buildings', ['documents', 'images']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Building::class);
        $records = $this->buildingService->listBuildingsByPagination();
        $params = [
            'pageTitle' => __('general.buildings'),
            'records' => $records,
        ];

        return view('dashboard.working-space.buildings.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Building::class);
        $params = [
            'pageTitle' => __('general.new_building'),
        ];

        return view('dashboard.working-space.buildings.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(BuildingRequest $request)
    {
        $this->authorize('create', Building::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.buildings.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.buildings.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        //
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Building::class);
        $model = Building::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_building'),
            'model' => $model,
        ];

        return view('dashboard.working-space.buildings.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(BuildingRequest $request, $id)
    {
        $this->authorize('update', Building::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.buildings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(BuildingRequest $request, $id)
    {
        $this->authorize('delete', Building::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.buildings.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function changeBuilding(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $buildingID = $request->get('buildingID');
        $building = Building::find($buildingID);
        if ($building) {
            session()->put('bId', $building->id);
            session()->put('bName', $building->name);
            $output = ['success' => true, 'msg' => ''];
        }

        return $output;
    }

    public function getFloorsOfBuilding(Request $request) {
        return BuildingService::getFloorsOfBuildingForJS($request);
    }
}
