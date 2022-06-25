<?php

namespace App\Http\Controllers\SystemConfiguration;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemConfiguration\SystemSettingsRequest;
use App\Models\SystemConfiguration\Setting;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('view', Setting::class);
        $records = Setting::first();
        $params = [
            'pageTitle' => __('general.SETTINGS'),
            'records' => $records,
        ];

        return view('dashboard.settings.system-settings.index', $params);
    }
    public function create()
    {
        $this->authorize('create', Setting::class);
        //
    }
    public function store(SystemSettingsRequest $request)
    {
        $this->authorize('create', Setting::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.system-settings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function show($id)
    {
        $this->authorize('view', Setting::class);
        //
    }
    public function edit($id)
    {
        $this->authorize('update', Setting::class);
        //
    }
    public function update(Request $request, $id)
    {
        $this->authorize('update', Setting::class);
        //
    }
    public function destroy($id)
    {
        $this->authorize('delete', Setting::class);
        //
    }


}
