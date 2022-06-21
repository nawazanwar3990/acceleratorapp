<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceMakeRequest;
use App\Http\Requests\Devices\DeviceModelRequest;
use App\Http\Requests\Devices\DeviceOperatingSystemRequest;
use App\Models\Devices\DeviceModel;
use App\Models\Devices\DeviceOperatingSystem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceOperatingSystemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): Factory|View|Application
    {
        $records = DeviceOperatingSystem::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.device_operating_system'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-operating-systems.index', $params);
    }
    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_operating_system'),
        ];
        return view('dashboard.devices.device-operating-systems.create', $params);
    }
    public function store(DeviceOperatingSystemRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-operating-systems.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-operating-systems.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
    public function edit(Request $request, DeviceOperatingSystem $deviceOperatingSystem): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceOperatingSystem->name),
            'model' => $deviceOperatingSystem
        ];
        return view('dashboard.devices.device-operating-systems.edit', $params);
    }
    public function update(DeviceOperatingSystemRequest $request, DeviceOperatingSystem $deviceOperatingSystem)
    {
        if ($request->updateData($deviceOperatingSystem)) {
            return redirect()->route('dashboard.device-operating-systems.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(DeviceOperatingSystemRequest $request, DeviceOperatingSystem $deviceOperatingSystem)
    {
        if ($request->deleteData($deviceOperatingSystem)) {
            return redirect()->route('dashboard.device-operating-systems.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
