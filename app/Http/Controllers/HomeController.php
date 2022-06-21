<?php

namespace App\Http\Controllers;
use App\Services\RealEstate\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user() == null) {
            return redirect('login');
        }

        $sId = $request->query('sId');
        if ($sId) {
            session()->forget('sId');
            session()->put('sId', $sId);
            return redirect()->route('dashboard.index');
        }

        $params = [
            'pageTitle' => __('general.dashboard'),
        ];
        return view('dashboard.index', $params);
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
