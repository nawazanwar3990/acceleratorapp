<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Enum\KeyWordEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\FlatRequest;
use App\Models\WorkingSpace\Flat;
use App\Services\FlatService;
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

class FlatController extends Controller
{
    use General;
    public function __construct(
        private FlatService $flatService
    )
    {
        $this->makeMultipleDirectories('flats', ['documents', 'images']);
        //$this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Flat::class);
        $records = $this->flatService->listFlatsByPagination();
        $params = [
            'pageTitle' => __('general.flats'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.flats.index',$params);
    }

    /**
     * @return Application|Factory|View|RedirectResponse
     * @throws AuthorizationException
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        $this->authorize('create', Flat::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::FLAT);
        $existing_limit = Flat::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.flats.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
        $params = [
            'pageTitle' => __('general.new_building'),
        ];
        $params = [
            'pageTitle' => __('general.create_flats'),
        ];
        return view('dashboard.working-spaces.flats.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FlatRequest $request)
    {
        $this->authorize('create', Flat::class);
        $package_limit = GeneralService::hasSubscriptionLimit(KeyWordEnum::FLAT);
        $existing_limit = Flat::where('created_by', Auth::id())->count();
        if ($existing_limit >= $package_limit) {
            return redirect()
                ->route('dashboard.flats.index')->with('error', 'Your Package limit has Exceeded.Please contact with admin for renew');
        }
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

        return view('dashboard.working-spaces.flats.edit', $params);
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

    public function getFlats(): Factory|View|Application
    {
        $flats = $this->flatService->listFlatsByPagination();
        $params = [
            'pageTitle' => __('general.flats'),
            'flats' => $flats,
        ];
        return view('website.working-spaces.flats', $params);
    }
}
