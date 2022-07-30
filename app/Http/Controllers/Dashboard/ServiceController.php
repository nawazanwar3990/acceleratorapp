<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\ServiceData;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
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
    public function index(Request $request): Factory|View|Application
    {
        $this->authorize('view', Service::class);
        $type = $request->query('type');
        $records = $this->serviceData->listServicesByPagination();
        $params = [
            'pageTitle' => __('general.services'),
            'records' => $records,
            'type' => $type
        ];
        return view('dashboard.services.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(Request $request): Factory|View|Application
    {
        $this->authorize(AbilityEnum::CREATE, Service::class);
        $type = $request->query('type');
        $params = [
            'pageTitle' => __('general.new_service'),
            'type' => $type
        ];
        return view('dashboard.services.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(ServiceRequest $request)
    {
        $this->authorize('create', Service::class);
        if ($model = $request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.services.create', ['type' => $model->type])
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.services.index', ['type' => $model->type])
                    ->with('success', __('general.record_created_successfully'));
            }
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

        return view('dashboard.services.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(ServiceRequest $request, $id)
    {
        $this->authorize('update', Service::class);
        if ($model = $request->updateData($id)) {
            return redirect()->route('dashboard.services.index', ['type' => $model->type])
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
