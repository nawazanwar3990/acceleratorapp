<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\OfficeTypeRequest;
use App\Models\WorkingSpace\OfficeType;
use App\Services\OfficeService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class OfficeTypeController extends Controller
{

    public function __construct(
        private OfficeService $officeService
    )
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', OfficeType::class);
        $records = $this->officeService->listOfficeTypeByPagination();
        $params = [
            'pageTitle' => __('general.office_types'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.office-types.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', OfficeType::class);
        $params = [
            'pageTitle' => __('general.new_office_type'),
        ];

        return view('dashboard.working-spaces.office-types.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(OfficeTypeRequest $request)
    {
        $this->authorize('create', OfficeType::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.office-types.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', OfficeType::class);
        $model = OfficeType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_office_type'),
            'model' => $model,
        ];

        return view('dashboard.working-spaces.office-types.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(OfficeTypeRequest $request, $id)
    {
        $this->authorize('update', OfficeType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.office-types.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(OfficeTypeRequest $request, $id)
    {
        $this->authorize('delete', OfficeType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.office-types.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
