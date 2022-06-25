<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\PlanManagement\Plan;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    public function index(Request $request): View|Factory|Redirector|Application|RedirectResponse
    {
        $pageTitle = __('general.website');
        return view('website.index', compact('pageTitle'));
    }
}
