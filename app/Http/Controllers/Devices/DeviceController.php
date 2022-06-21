<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceRequest;
use App\Models\Devices\Device;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $records = Device::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.device'),
            'records' => $records,
        ];
        return view('dashboard.devices.device.index', $params);
    }

    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device'),
        ];
        return view('dashboard.devices.device.create', $params);
    }

    public function store(DeviceRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.devices.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.devices.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function edit(Request $request, Device $device): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($device->device_name),
            'model' => $device
        ];
        return view('dashboard.devices.device.edit', $params);
    }

    public function update(DeviceRequest $request, Device $device)
    {
        if ($request->updateData($device)) {
            return redirect()->route('dashboard.devices.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(DeviceRequest $request, Device $device)
    {
        if ($request->deleteData($device)) {
            return redirect()->route('dashboard.devices.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
