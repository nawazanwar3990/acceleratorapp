<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        $params = [
            'pageTitle' => __('general.login'),
        ];
        return view('auth.login', $params);
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        if (Auth::user()->active == 1) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            Auth::logout();
            return redirect()->route('dashboard.index')
                ->withErrors(['login' => __('auth.blocked')])
                ->withInput(['login' => $request->login]);
        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Cache::flush();
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('sId');
        return redirect()->route('dashboard');
    }
}
