<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Devices\DeviceClassRequest;
use App\Models\Devices\DeviceClass;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function view;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $records = DeviceClass::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.device_class'),
            'records' => $records,
        ];
        return view('dashboard.devices.device-classes.index', $params);
    }

    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_device_class'),
        ];
        return view('dashboard.devices.device-classes.create', $params);
    }

    public function store(DeviceClassRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.device-classes.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.device-classes.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function edit(Request $request, DeviceClass $deviceClass): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($deviceClass->name),
            'model' => $deviceClass
        ];
        return view('dashboard.devices.device-classes.edit', $params);
    }

    public function update(DeviceClassRequest $request, DeviceClass $deviceClass)
    {
        if ($request->updateData($deviceClass)) {
            return redirect()->route('dashboard.device-classes.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(DeviceClassRequest $request, DeviceClass $deviceClass)
    {
        if ($request->deleteData($deviceClass)) {
            return redirect()->route('dashboard.device-classes.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
