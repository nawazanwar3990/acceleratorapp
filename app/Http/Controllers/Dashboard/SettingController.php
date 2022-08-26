<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SystemSettingsRequest;
use App\Models\Setting;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class SettingController extends Controller
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
      //  $this->authorize('view', Setting::class);
        $records = Setting::first();
        $params = [
            'pageTitle' => __('general.SETTINGS'),
            'records' => $records,
        ];

        return view('dashboard.settings.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(SystemSettingsRequest $request)
    {
      //  $this->authorize('create', Setting::class);
            if ($request->createData()) {
                return redirect()->route('dashboard.settings.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.settings.index')
                    ->with('success', __('general.record_created_successfully'));
            }
    }

}
