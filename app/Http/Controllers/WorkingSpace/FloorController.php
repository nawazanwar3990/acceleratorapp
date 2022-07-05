<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\FloorRequest;
use App\Models\WorkingSpace\Flat;
use App\Models\WorkingSpace\Floor;
use App\Services\FloorService;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function view;

class FloorController extends Controller
{
    use General;
    public function __construct(
        private FloorService $floorService
    )
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
        $records = $this->floorService->listFloorByPagination();
        $params = [
            'pageTitle' => __('general.floors'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.floors.index',$params);
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     * @throws AuthorizationException
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        $this->authorize('create', Floor::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::FLOOR);
        $existing_limit = FLOOR::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.floors.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
        $params = [
            'pageTitle' => __('general.new_floor'),
        ];

        return view('dashboard.working-spaces.floors.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FloorRequest $request)
    {
        $this->authorize('create', Floor::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::FLOOR);
        $existing_limit = FLOOR::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.floors.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
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

        return view('dashboard.working-spaces.floors.edit', $params);
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
    /**
     * @throws AuthorizationException
     */
    public function getFloors(): Factory|View|Application
    {
        $this->authorize('view', Floor::class);
        $floors = $this->floorService->listFloorByPagination();
        $params = [
            'pageTitle' => __('general.floors'),
            'floors' => $floors,
        ];
        return view('website.working-spaces.floors', $params);
    }
}
