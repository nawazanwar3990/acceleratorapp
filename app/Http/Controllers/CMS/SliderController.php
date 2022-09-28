<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\SliderRequest;
use App\Services\CMS\SliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class SliderController  extends Controller
{
    public function __construct(
        private SliderService $sliderService
    )
    {
        $this->middleware('auth');
    }
    public function index(SliderRequest $request): Factory|View|Application
    {
        $records = $this->sliderService->listByPagination();
        $params = [
            'pageTitle' => __('general.slider'),
            'records' => $records,
        ];
        return view('cms.slider.index',$params);
    }
    public function create(SliderRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_slider'),
        ];
        return view('cms.slider.create', $params);
    }
    public function store(SliderRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.sliders.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.sliders.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->sliderService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_slider'),
            'model' => $model,
        ];
        return view('cms.slider.edit', $params);
    }
    public function update(SliderRequest $request, $id)
    {
        $model = $this->sliderService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.sliders.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.sliders.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(SliderRequest $request, int $id)
    {
        $model = $this->sliderService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.sliders.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
