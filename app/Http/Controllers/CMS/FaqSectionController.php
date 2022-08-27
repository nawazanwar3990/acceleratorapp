<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\FaqSectionRequest;
use App\Services\CMS\FaqSectionService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FaqSectionController  extends Controller
{
    public function __construct(
        private FaqSectionService $faqSectionService
    )
    {
        $this->middleware('auth');
    }
    public function index(FaqSectionRequest $request): Factory|View|Application
    {
        $records = $this->faqSectionService->listByPagination();
        $params = [
            'pageTitle' => __('general.faq_section'),
            'records' => $records,
        ];
        return view('cms.faq-section.index',$params);
    }
    public function create(FaqSectionRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_faq-section'),
        ];
        return view('cms.faq-section.create', $params);
    }
    public function store(FaqSectionRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.faq-sections.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.faq-sections.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->faqSectionService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_faq-section'),
            'model' => $model,
        ];
        return view('cms.faq-section.edit', $params);
    }
    public function update(FaqSectionRequest $request, $id)
    {
        $model = $this->faqSectionService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.faq-sections.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.faq-sections.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(FaqSectionRequest $request, int $id)
    {
        $model = $this->faqSectionService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.faq-sections.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
