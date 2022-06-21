<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceMakeRequest;
use App\Http\Requests\Devices\DeviceModelRequest;
use App\Models\Devices\DeviceMake;
use App\Models\Devices\DeviceModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): Factory|View|Application
    {
        $records = DeviceModel::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.device_model'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-models.index', $params);
    }
    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_model'),
        ];
        return view('dashboard.devices.device-models.create', $params);
    }
    public function store(DeviceModelRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-models.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-models.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
    public function edit(Request $request, DeviceModel $deviceModel): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceModel->name),
            'model' => $deviceModel
        ];
        return view('dashboard.devices.device-models.edit', $params);
    }
    public function update(DeviceMakeRequest $request, DeviceModel $deviceModel)
    {
        if ($request->updateData($deviceModel)) {
            return redirect()->route('dashboard.device-models.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(DeviceMakeRequest $request, DeviceModel $deviceModel)
    {
        if ($request->deleteData($deviceModel)) {
            return redirect()->route('dashboard.device-models.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
