<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class BAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): Factory|View|Application
    {
        $type = $request->query('type');
        $records = BA::with('user','services','other_services')->where('payment_process', $type)->paginate(20);
        $params = [
            'pageTitle' => __('general.accelerators'),
            'records' => $records,
            'type' => $type
        ];

        return view('dashboard.ba.index', $params);
    }
}
