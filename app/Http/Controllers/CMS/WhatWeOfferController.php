<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\SliderRequest;
use App\Http\Requests\CMS\WhatWeOfferRequest;
use App\Services\CMS\SliderService;
use App\Services\CMS\WhatWeOfferService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class WhatWeOfferController  extends Controller
{
    public function __construct(
        private WhatWeOfferService $whatWeOfferService
    )
    {
        $this->middleware('auth');
    }
    public function index(WhatWeOfferRequest $request): Factory|View|Application
    {
        $records = $this->whatWeOfferService->listByPagination();
        $params = [
            'pageTitle' => __('general.what_we_offer'),
            'records' => $records,
        ];
        return view('cms.what-we-offer.index',$params);
    }
    public function create(WhatWeOfferRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_offer'),
        ];
        return view('cms.what-we-offer.create', $params);
    }
    public function store(WhatWeOfferRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.what-we-offers.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.what-we-offers.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->whatWeOfferService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_offer'),
            'model' => $model,
        ];
        return view('cms.what-we-offer.edit', $params);
    }
    public function update(WhatWeOfferRequest $request, $id)
    {
        $model = $this->whatWeOfferService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.what-we-offers.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.what-we-offers.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(WhatWeOfferRequest $request, int $id)
    {
        $model = $this->whatWeOfferService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.what-we-offers.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
