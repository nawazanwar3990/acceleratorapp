<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\MenuRequest;
use App\Http\Requests\CMS\PageRequest;
use App\Http\Requests\CMS\SectionRequest;
use App\Http\Requests\FloorTypeRequest;
use App\Models\FloorType;
use App\Services\CMS\MenuService;
use App\Services\CMS\PageService;
use App\Services\CMS\SectionService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class SectionController extends Controller
{
    public function __construct(
        private SectionService $sectionService
    )
    {
        $this->middleware('auth');
    }

    public function index(SectionRequest $request): Factory|View|Application
    {
        $records = $this->sectionService->listByPagination();
        $params = [
            'pageTitle' => __('general.sections'),
            'records' => $records,
        ];
        return view('cms.sections.index', $params);
    }

    public function create(SectionRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_section'),
        ];
        return view('cms.sections.create', $params);
    }

    public function store(SectionRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.sections.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.sections.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }

    public function edit($id): Factory|View|Application
    {
        $model = $this->sectionService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_section'),
            'model' => $model,
        ];
        return view('cms.sections.edit', $params);
    }

    public function update(SectionRequest $request, $id)
    {
        $model = $this->sectionService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.sections.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.sections.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }

    public function destroy(SectionRequest $request, int $id)
    {
        $model = $this->sectionService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.sections.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
