<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Plans\Plan;
use App\Services\PersonService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct(
        private PersonService $personService
    ){

    }
    public function index(): View|Factory|Application
    {
        $plans = Plan::all();
        $pageTitle = __('general.plans');
        return view('website.plans.index',compact('pageTitle','plans'));
    }
    public function store(Request $request): RedirectResponse
    {
        $session_user = session()->get('register_user');
        $user = $this->personService->findUserById($session_user->id);
        event(new Registered($user));
        return redirect()->route('website.verify-user-email-success');
    }
}
