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
    )
    {

    }

    public function index(): View|Factory|Application
    {
        $plans = Plan::all();
        $pageTitle = __('general.plans');
        return view('website.plans.index', compact('pageTitle', 'plans'));
    }

    public function store(Request $request)
    {
        $plans = $request->all();
        $count = $request->input('name');
        $data = array();
        if (count($plans) > 0) {
            foreach ($count as $key => $value) {
                $name = $plans['name'][$key];
                $type = $plans['type'][$key];
                $price = $plans['price'][$key];
                $limit = $plans['limit'][$key];
                $expiry_date = $plans['expiry_date'][$key];
                $data[] = [
                    'name' => $name,
                    'type' => $type,
                    'price' => $price,
                    'limit' => $limit,
                    'expiry_date' => $expiry_date
                ];
            }
        }
        $session_user = session()->get('register_user');
        $user = $this->personService->findUserById($session_user->id);
        $user->plans()->createMany($data);
        event(new Registered($user));
        session()->forget('register_user');
        return redirect()->route('login')->with('success', trans('general.verify_email_address_message'));
    }
}
