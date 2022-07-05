<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\BuildingRequest;
use App\Models\WorkingSpace\Building;
use App\Services\BuildingService;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('dashboard.working-spaces.buildings.index', $params);
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     * @throws AuthorizationException
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        $this->authorize('create', Building::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::BUILDING);
        $existing_buildings = Building::where('created_by', Auth::id())->count();
        if ($existing_buildings >= $package_limit) {
            return redirect()
                ->route('dashboard.buildings.index')->with('error', 'Your Package limit has Exceeded.please contact with admin for renew');
        }
        $params = [
            'pageTitle' => __('general.new_building'),
        ];

         return view('dashboard.working-spaces.buildings.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(BuildingRequest $request)
    {
        $this->authorize('create', Building::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::BUILDING);
        $existing_buildings = Building::where('created_by', Auth::id())->count();
        if ($existing_buildings >= $package_limit) {
            return redirect()
                ->route('dashboard.buildings.index')->with('error', 'Your Package limit has Exceeded.please contact with admin for renew');
        }
        $has_package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::BUILDING);
        if ($request->createData()) {
            return redirect()->route('dashboard.buildings.create')
                ->with('success', __('general.record_created_successfully'));
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

        return view('dashboard.working-spaces.buildings.edit', $params);
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

    public function changeBuilding(Request $request)
    {
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

    public function getFloorsOfBuilding(Request $request)
    {
        return BuildingService::getFloorsOfBuildingForJS($request);
    }

    /**
     * @throws AuthorizationException
     */
    public function getBuildings(): Factory|View|Application
    {
        $this->authorize('view', Building::class);
        $buildings = $this->buildingService->listBuildingsByPagination();
        $params = [
            'pageTitle' => __('general.buildings'),
            'buildings' => $buildings,
        ];
        return view('website.working-spaces.buildings', $params);
    }
}
