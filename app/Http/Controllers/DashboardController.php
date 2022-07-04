<?php

namespace App\Http\Controllers;

use App\Enum\KeyWordEnum;
use App\Enum\ModuleEnum;
use App\Models\WorkingSpace\Building;
use App\Services\GeneralService;
use App\Services\HomeService;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)/*: View|Factory|Redirector|RedirectResponse|Application*/
    {
        if (Auth::user() == null) {
            return redirect('login');
        }
        $params = [
            'pageTitle' => __('general.dashboard'),
        ];
        return view('dashboard.index', $params);
    }
}
