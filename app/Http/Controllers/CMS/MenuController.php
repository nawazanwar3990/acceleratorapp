<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\MenuRequest;
use App\Http\Requests\FloorTypeRequest;
use App\Models\FloorType;
use App\Services\CMS\MenuService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class MenuController extends Controller
{
    public function __construct(
        private MenuService $menuService
    )
    {
        $this->middleware('auth');
    }
    public function index(MenuRequest $request): Factory|View|Application
    {
        $records = $this->menuService->listByPagination();
        $params = [
            'pageTitle' => __('general.menus'),
            'records' => $records,
        ];
        return view('cms.menus.index',$params);
    }
    public function create(MenuRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_menu'),
        ];
        return view('cms.menus.create', $params);
    }
    public function store(MenuRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.menus.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.menus.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->menuService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_menu'),
            'model' => $model,
        ];
        return view('cms.menus.edit', $params);
    }
    public function update(MenuRequest $request, $id)
    {
        $model = $this->menuService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.menus.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.menus.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(MenuRequest $request, int $id)
    {
        $model = $this->menuService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.menus.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
