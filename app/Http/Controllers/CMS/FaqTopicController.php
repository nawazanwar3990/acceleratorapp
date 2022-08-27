<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\FaqTopicRequest;
use App\Http\Requests\CMS\LayoutRequest;
use App\Services\CMS\FaqTopicService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FaqTopicController  extends Controller
{
    public function __construct(
        private FaqTopicService $faqTopicService
    )
    {
        $this->middleware('auth');
    }
    public function index(FaqTopicRequest $request): Factory|View|Application
    {
        $records = $this->faqTopicService->listByPagination();
        $params = [
            'pageTitle' => __('general.faq_topics'),
            'records' => $records,
        ];
        return view('cms.faq-topic.index',$params);
    }
    public function create(FaqTopicRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_faq_topic'),
        ];
        return view('cms.faq-topic.create', $params);
    }
    public function store(FaqTopicRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.faq-topics.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.faq-topics.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->faqTopicService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_faq_topic'),
            'model' => $model,
        ];
        return view('cms.faq-topic.edit', $params);
    }
    public function update(FaqTopicRequest $request, $id)
    {
        $model = $this->faqTopicService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.faq-topics.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.faq-topics.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(LayoutRequest $request, int $id)
    {
        $model = $this->faqTopicService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.faq-topics.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
