<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\BlogRequest;
use App\Services\CMS\BlogService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class BlogController  extends Controller
{
    public function __construct(
        private BlogService $blogService
    )
    {
        $this->middleware('auth');
    }
    public function index(BlogRequest $request): Factory|View|Application
    {
        $records = $this->blogService->listByPagination();
        $params = [
            'pageTitle' => __('general.blog'),
            'records' => $records,
        ];
        return view('cms.blog.index',$params);
    }
    public function create(BlogRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_blogs'),
        ];
        return view('cms.blog.create', $params);
    }
    public function store(BlogRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.blogs.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.blogs.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->blogService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_blogs'),
            'model' => $model,
        ];
        return view('cms.blog.edit', $params);
    }
    public function update(BlogRequest $request, $id)
    {
        $model = $this->blogService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.blogs.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.blogs.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(BlogRequest $request, int $id)
    {
        $model = $this->blogService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.blogs.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
