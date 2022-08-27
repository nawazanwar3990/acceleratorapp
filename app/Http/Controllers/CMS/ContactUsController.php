<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\ContactUsRequest;
use App\Services\CMS\ContactUsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class ContactUsController extends Controller
{
    public function __construct(
        private ContactUsService $contactUsService
    )
    {
        $this->middleware('auth');
    }
    public function index(ContactUsRequest $request): Factory|View|Application
    {
        $records = $this->contactUsService->listByPagination();
        $params = [
            'pageTitle' => __('general.contact_us'),
            'records' => $records,
        ];
        return view('cms.contact-us.index',$params);
    }
    public function create(ContactUsRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_contact_us'),
        ];
        return view('cms.contact-us.create', $params);
    }
    public function store(ContactUsRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.contact-us.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.contact-us.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->contactUsService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_contact_us'),
            'model' => $model,
        ];
        return view('cms.contact-us.edit', $params);
    }
    public function update(ContactUsRequest $request, $id)
    {
        $model = $this->contactUsService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.contact-us.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.contact-us.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(ContactUsRequest $request, int $id)
    {
        $model = $this->contactUsService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.contact-us.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
