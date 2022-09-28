<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\HowItWorkRequest;
use App\Http\Requests\CMS\SliderRequest;
use App\Http\Requests\CMS\WhatWeOfferRequest;
use App\Services\CMS\HowItWorkService;
use App\Services\CMS\SliderService;
use App\Services\CMS\WhatWeOfferService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class HowItWorkController  extends Controller
{
    public function __construct(
        private HowItWorkService $howItWorkService
    )
    {
        $this->middleware('auth');
    }
    public function index(HowItWorkRequest $request): Factory|View|Application
    {
        $records = $this->howItWorkService->listByPagination();
        $params = [
            'pageTitle' => __('general.how_it_work'),
            'records' => $records,
        ];
        return view('cms.how-it-work.index',$params);
    }
    public function create(HowItWorkRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_work'),
        ];
        return view('cms.how-it-work.create', $params);
    }
    public function store(HowItWorkRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.how-it-works.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.how-it-works.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->howItWorkService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_work'),
            'model' => $model,
        ];
        return view('cms.how-it-work.edit', $params);
    }
    public function update(HowItWorkRequest $request, $id)
    {
        $model = $this->howItWorkService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.how-it-works.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.how-it-works.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(HowItWorkRequest $request, int $id)
    {
        $model = $this->howItWorkService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.how-it-works.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
