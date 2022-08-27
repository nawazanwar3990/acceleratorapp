<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\LayoutRequest;
use App\Http\Requests\CMS\MenuRequest;
use App\Http\Requests\FloorTypeRequest;
use App\Models\FloorType;
use App\Services\CMS\LayoutService;
use App\Services\CMS\MenuService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class LayoutController extends Controller
{
    public function __construct(
        private LayoutService $layoutService
    )
    {
        $this->middleware('auth');
    }
    public function index(LayoutRequest $request): Factory|View|Application
    {
        $records = $this->layoutService->listByPagination();
        $params = [
            'pageTitle' => __('general.layouts'),
            'records' => $records,
        ];
        return view('cms.layouts.index',$params);
    }
    public function create(LayoutRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_layout'),
        ];
        return view('cms.layouts.create', $params);
    }
    public function store(LayoutRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.layouts.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.layouts.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->layoutService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_layout'),
            'model' => $model,
        ];
        return view('cms.layouts.edit', $params);
    }
    public function update(LayoutRequest $request, $id)
    {
        $model = $this->layoutService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.layouts.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.layouts.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(LayoutRequest $request, int $id)
    {
        $model = $this->layoutService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.layouts.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
