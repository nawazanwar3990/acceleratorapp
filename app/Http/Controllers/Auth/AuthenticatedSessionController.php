<?php

namespace App\Http\Controllers\Auth;

use App\Enum\CacheEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LanguageSchool;
use App\Models\RealEstate\Business;
use App\Models\RealEstate\Settings\SystemSetting;
use App\Providers\RouteServiceProvider;
use App\Services\CacheService;
use App\Services\GeneralService;
use App\Services\TenantService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return View
     */
    public function create(): View
    {
        $params = [
            'pageTitle' => __('general.login'),
        ];
        return view('auth.login', $params);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        if (Auth::user()->active == 1) {
            $request->session()->regenerate();
            if (isset(Auth::user()->building_id)) {
                session()->put('bId', Auth::user()->Building->id);
                session()->put('bName', Auth::user()->Building->name);
                $businessModel = Business::findOrFail(1);
                session()->put('business', $businessModel);
                session()->put('currencySymbol', GeneralService::currencySymbols( SystemSetting::find(1)->currency_format) );
                session()->put('currencyPosition', SystemSetting::find(1)->currency_symbol_position);
                RoleEnum::get_role_permission_array();
            }
            return redirect()->intended('dashboard');
        } else {
            Auth::logout();
            return redirect()->route('dashboard.index')
                ->withErrors(['login' => __('auth.blocked')])
                ->withInput(['login' => $request->login]);
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = Auth::user();
        Cache::flush();
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('sId');
        return redirect()->route('dashboard');
    }
}
