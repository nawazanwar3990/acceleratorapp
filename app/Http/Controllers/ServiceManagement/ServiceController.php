<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceManagement\ServiceRequest;
use App\Models\ServiceManagement\Service;
use App\Services\ServiceData;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class ServiceController extends Controller
{
    public function __construct(
        private ServiceData $serviceData
    )
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Service::class);
        $records = $this->serviceData->listServicesByPagination();
        $params = [
            'pageTitle' => __('general.service'),
            'records' => $records,
        ];
        return view('dashboard.service-management.services.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
       $this->authorize(AbilityEnum::CREATE, Service::class);
        $params = [
            'pageTitle' => __('general.new_service'),
        ];
        return view('dashboard.service-management.services.create',compact('params'));
    }


    /**
     * @throws AuthorizationException
     */
    public function store(ServiceRequest $request)
    {
         $this->authorize('create', Service::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.services.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }


    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
         $this->authorize('update', Service::class);
        $model = Service::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_service'),
            'model' => $model,
        ];

        return view('dashboard.service-management.services.edit', $params);
    }


    /**
     * @throws AuthorizationException
     */
    public function update(ServiceRequest $request, $id)
    {
         $this->authorize('update', Service::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.services.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(ServiceRequest $request, $id)
    {
         $this->authorize('delete', Service::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.services.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
