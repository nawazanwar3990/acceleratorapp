<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AbilityEnum;
use App\Enum\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Freelancer;
use App\Services\PersonService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function view;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request): Factory|View|Application
    {
        $type = $request->query('type');
        $records = Freelancer::with('user')->where('payment_process', $type);
        if (PersonService::hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $records = $records->where('created_by', Auth::id());
        } else {
            $records = $records->where('created_by', null);
        }
        $records = $records->paginate(20);
        $params = [
            'pageTitle' => __('general.freelancers'),
            'records' => $records,
            'type' => $type
        ];

        return view('dashboard.freelancers.index', $params);
    }
}
