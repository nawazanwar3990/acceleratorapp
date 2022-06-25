<?php

namespace App\Http\Controllers\SystemConfiguration;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemConfiguration\SystemSettingsRequest;
use App\Models\SystemConfiguration\Setting;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Setting::class);
        $records = Setting::first();
        $params = [
            'pageTitle' => __('general.SETTINGS'),
            'records' => $records,
        ];

        return view('dashboard.system-configurations.settings.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(SystemSettingsRequest $request)
    {
        $this->authorize('create', Setting::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.settings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

}
