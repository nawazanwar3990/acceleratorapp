<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CustomerController extends Controller
{
    use General;

    public function __construct(
    )
    {
        $this->makeMultipleDirectories('customer', ['images']);
    }
    public function create(UserRequest $request): Factory|View|Application
    {
        return view('website.customers.create');
    }
    public function store(UserRequest $request)
    {
        if ($request->createCustomer()) {
            if ($request->saveNew) {
                return redirect()->route('website.index')
                    ->with('success', __('general.customer_created_success_message'));
            } else {
                return redirect()->route('website.index')
                    ->with('success', __('general.customer_created_success_message'));
            }
        }
    }
}
