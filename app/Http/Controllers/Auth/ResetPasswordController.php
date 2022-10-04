<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected string $redirectTo = '/';

    public function showResetForm(Request $request, $token = null): Factory|View|Application
    {
        return view('auth.passwords.reset')->with(
            [
                'token' => $token,
                'email' => $request->email
            ]
        );
    }
}
