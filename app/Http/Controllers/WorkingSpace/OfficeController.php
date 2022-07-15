<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\FloorRequest;
use App\Http\Requests\WorkingSpace\OfficeRequest;
use App\Models\WorkingSpace\Floor;
use App\Models\WorkingSpace\Office;
use App\Services\OfficeService;
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

class OfficeController extends Controller
{
    use General;

    public function __construct(
        private OfficeService $officeService
    )
    {
        $this->makeMultipleDirectories('offices', ['documents', 'images']);
        //$this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Office::class);
        $records = $this->officeService->listOfficesByPagination();
        $params = [
            'pageTitle' => __('general.offices'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.offices.index', $params);
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     * @throws AuthorizationException
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        $this->authorize('create', Office::class);
        $package_limit = GeneralService::hasPackageSubscriptionLimit(KeyWordEnum::OFFICE);
        $existing_limit = Office::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.offices.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
        $remainingLimit = intval($package_limit) - intval($existing_limit);
        $pageTitle = __('general.new_office');
        return view('dashboard.working-spaces.offices.create', compact('remainingLimit', 'pageTitle'));
    }

    /**
     * @throws AuthorizationException
     */
    public function store(OfficeRequest $request)
    {
        $this->authorize('create', Office::class);
        $package_limit = GeneralService::hasPackageSubscriptionLimit(KeyWordEnum::OFFICE);
        $existing_limit = Office::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.offices.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
        if ($request->createData()) {
            return redirect()->route('dashboard.offices.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Office::class);
        $model = Office::findorFail($id);
        $floors = Floor::where('building_id', $model->building_id)->pluck('name', 'id');
        $params = [
            'pageTitle' => __('general.edit_office'),
            'model' => $model,
            'floors' => $floors
        ];

        return view('dashboard.working-spaces.offices.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(OfficeRequest $request, $id)
    {
        $this->authorize('update', Office::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.offices.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(OfficeRequest $request, $id)
    {
        $this->authorize('delete', Office::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.offices.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getOffices(): Factory|View|Application
    {
        $offices = $this->officeService->listOfficesByPagination();
        $params = [
            'pageTitle' => __('general.offices'),
            'offices' => $offices,
        ];
        return view('website.working-spaces.offices', $params);
    }
}
