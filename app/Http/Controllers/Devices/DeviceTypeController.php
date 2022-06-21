<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceClassRequest;
use App\Http\Requests\Devices\DeviceLocationRequest;
use App\Http\Requests\Devices\DeviceTypeRequest;
use App\Models\Devices\DeviceClass;
use App\Models\Devices\DeviceLocation;
use App\Models\Devices\DeviceType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class DeviceTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): Factory|View|Application
    {
        $records = DeviceType::orderBy('id','DESC')->get();
        $params = [
            'pageTitle' => __('general.device_type'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-types.index', $params);
    }
    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_type'),
        ];
        return view('dashboard.devices.device-types.create', $params);
    }
    public function store(DeviceTypeRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-types.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-types.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }
    public function edit(Request $request, DeviceType $deviceType): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceType->name),
            'model' => $deviceType
        ];
        return view('dashboard.devices.device-types.edit', $params);
    }
    public function update(DeviceTypeRequest $request, DeviceType $deviceType)
    {
        if ($request->updateData($deviceType)) {
            return redirect()->route('dashboard.device-types.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(DeviceTypeRequest $request, DeviceType $deviceType)
    {
        if ($request->deleteData($deviceType)) {
            return redirect()->route('dashboard.device-types.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
