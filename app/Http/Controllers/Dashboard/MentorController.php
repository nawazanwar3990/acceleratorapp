<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Mentor;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class MentorController extends Controller
{
    public function __construct(
    )
    {
        $this->middleware('auth');
    }
    public function index(Request $request): Factory|View|Application
    {
        $type = $request->query('type');
        $records = Mentor::with('user')->where('payment_process', $type)->paginate(20);
        $params = [
            'pageTitle' => __('general.accelerators'),
            'records' => $records,
            'type' => $type
        ];

        return view('dashboard.mentors.index', $params);
    }
}
