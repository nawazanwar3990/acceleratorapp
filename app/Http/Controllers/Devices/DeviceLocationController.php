<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceClassRequest;
use App\Http\Requests\Devices\DeviceLocationRequest;
use App\Models\Devices\DeviceClass;
use App\Models\Devices\DeviceLocation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceLocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): Factory|View|Application
    {
        $records = DeviceLocation::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.device_location'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-locations.index', $params);
    }
    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_location'),
        ];
        return view('dashboard.devices.device-locations.create', $params);
    }
    public function store(DeviceLocationRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-locations.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-locations.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
    public function edit(Request $request, DeviceLocation $deviceLocation): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceLocation->name),
            'model' => $deviceLocation
        ];
        return view('dashboard.devices.device-locations.edit', $params);
    }
    public function update(DeviceLocationRequest $request, DeviceLocation $deviceLocation)
    {
        if ($request->updateData($deviceLocation)) {
            return redirect()->route('dashboard.device-locations.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(DeviceLocationRequest $request, DeviceLocation $deviceLocation)
    {
        if ($request->deleteData($deviceLocation)) {
            return redirect()->route('dashboard.device-locations.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
