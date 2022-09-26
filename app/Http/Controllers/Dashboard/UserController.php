<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\PersonService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function __construct(
        private PersonService $personService
    )
    {
        $this->middleware('auth');
    }
    public function edit(Request $request,$id): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_users'),
            'user' => $this->personService->findUserById($id)
        ];
        return view('dashboard.user-management.users.edit', $params);
    }
}
