<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\DescriptiveRequest;
use App\Http\Requests\CMS\SliderRequest;
use App\Services\CMS\DescriptiveService;
use App\Services\CMS\SliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class DescriptiveController  extends Controller
{
    public function __construct(
        private DescriptiveService $descriptiveService
    )
    {
        $this->middleware('auth');
    }
    public function index(DescriptiveRequest $request): Factory|View|Application
    {
        $records = $this->descriptiveService->listByPagination();
        $params = [
            'pageTitle' => __('general.descriptive'),
            'records' => $records,
        ];
        return view('cms.descriptive.index',$params);
    }
    public function create(DescriptiveRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_descriptive'),
        ];
        return view('cms.descriptive.create', $params);
    }
    public function store(DescriptiveRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.descriptive.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.descriptive.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->descriptiveService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_descriptive'),
            'model' => $model,
        ];
        return view('cms.descriptive.edit', $params);
    }
    public function update(DescriptiveRequest $request, $id)
    {
        $model = $this->descriptiveService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.descriptive.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.descriptive.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(DescriptiveRequest $request, int $id)
    {
        $model = $this->descriptiveService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.descriptive.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
