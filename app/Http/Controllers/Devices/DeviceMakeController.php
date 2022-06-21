<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceLocationRequest;
use App\Http\Requests\Devices\DeviceMakeRequest;
use App\Models\Devices\DeviceLocation;
use App\Models\Devices\DeviceMake;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceMakeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): Factory|View|Application
    {
        $records = DeviceMake::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.device_make'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-makes.index', $params);
    }
    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_make'),
        ];
        return view('dashboard.devices.device-makes.create', $params);
    }
    public function store(DeviceMakeRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-makes.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-makes.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
    public function edit(Request $request, DeviceMake $deviceMake): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceMake->name),
            'model' => $deviceMake
        ];
        return view('dashboard.devices.device-makes.edit', $params);
    }
    public function update(DeviceMakeRequest $request, DeviceMake $deviceMake)
    {
        if ($request->updateData($deviceMake)) {
            return redirect()->route('dashboard.device-makes.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(DeviceMakeRequest $request, DeviceMake $deviceMake)
    {
        if ($request->deleteData($deviceMake)) {
            return redirect()->route('dashboard.device-makes.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
