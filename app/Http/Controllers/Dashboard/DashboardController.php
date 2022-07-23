<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function view;

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
