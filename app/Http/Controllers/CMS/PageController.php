<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\MenuRequest;
use App\Http\Requests\CMS\PageRequest;
use App\Http\Requests\FloorTypeRequest;
use App\Models\FloorType;
use App\Services\CMS\MenuService;
use App\Services\CMS\PageService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class PageController extends Controller
{
    use General;
    public function __construct(
        private PageService $pageService
    )
    {
        $this->middleware('auth');
        $this->makeDirectory('pages');
    }
    public function index(PageRequest $request): Factory|View|Application
    {
        $records = $this->pageService->listByPagination();
        $params = [
            'pageTitle' => __('general.pages'),
            'records' => $records,
        ];
        return view('cms.pages.index',$params);
    }
    public function create(PageRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_page'),
        ];
        return view('cms.pages.create', $params);
    }
    public function store(PageRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.pages.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.pages.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->pageService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_page'),
            'model' => $model,
        ];
        return view('cms.pages.edit', $params);
    }
    public function update(PageRequest $request, $id)
    {
        $model = $this->pageService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.pages.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.pages.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(PageRequest $request, int $id)
    {
        $model = $this->pageService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.pages.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
