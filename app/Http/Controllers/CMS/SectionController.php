<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\SectionRequest;
use App\Services\CMS\SectionService;
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

    public function store(SectionRequest $request)
    {
        if ($request->syncData()) {
            if ($request->saveNew) {
                return redirect()->back()
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.pages.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
}
