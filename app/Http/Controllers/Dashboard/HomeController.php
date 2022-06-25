<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Services\HomeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use function __;
use function view;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View|Factory|Redirector|Application|RedirectResponse
    {
        $pageTitle = __('general.dashboard');
        return view('dashboard.index', compact('pageTitle'));
    }

    public function dashboardDataAjax()
    {
        return [
            'months' => HomeService::getAllMonthName(),
            'data_expense_chart' => HomeService::expenceChartYearly(),
            'daysInMonth' => HomeService::daysInMonth(Carbon::now()->month),
            'currentMonthName' => Carbon::now()->format('M'),
            'getMonthlyExpenseData' => HomeService::getMonthlyExpenseData(HomeService::daysInMonth(Carbon::now()->month)),
        ];
    }
}
