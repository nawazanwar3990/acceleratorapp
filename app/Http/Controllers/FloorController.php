<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkingSpace\FloorRequest;
use App\Models\Floor;
use App\Services\FloorService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
        //$this->middleware('auth');
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
        return view('dashboard.working-spaces.floors.index', $params);
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     * @throws AuthorizationException
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        $this->authorize('create', Floor::class);
       /* $package_limit = GeneralService::hasPackageSubscriptionLimit(KeyWordEnum::FLOOR);
        $existing_limit = FLOOR::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.floors.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }*/
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
      /*  $this->authorize('create', Floor::class);
        $package_limit = GeneralService::hasPackageSubscriptionLimit(KeyWordEnum::FLOOR);
        $existing_limit = FLOOR::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.floors.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }*/
        if ($request->createData()) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.floors.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.floors.index')
                    ->with('success', __('general.record_created_successfully'));
            }
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

    public function show($id)
    {
        $floor = Floor::with('offices','offices.plans.basic_services','offices.plans.additional_services')->find($id);
        $pageTitle = "Detail of ".$floor->name;
        return view('dashboard.working-spaces.floors.show',compact('floor','pageTitle'));

    }

    /**
     * @throws AuthorizationException
     */
    public function update(FloorRequest $request, $id)
    {
        $this->authorize('update', Floor::class);


        if ($request->updateData($id)) {

            if ($request->saveNew) {
                return redirect()->route('dashboard.floors.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.floors.index')
                    ->with('success', __('general.record_updated_successfully'));
            }

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
    public function getFloors(): Factory|View|Application
    {
        $floors = $this->floorService->listFloorByPagination();
        $params = [
            'pageTitle' => __('general.floors'),
            'floors' => $floors,
        ];
        return view('website.working-spaces.floors', $params);
    }
}
