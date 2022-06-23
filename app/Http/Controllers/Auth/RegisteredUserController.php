<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authorization\PersonRequest;
use App\Models\Authorization\Role;
use App\Services\GeneralService;
use App\Services\PersonService;
use Database\Seeders\Auth\RoleSeeder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class RegisteredUserController extends Controller
{
    public function __construct(
        private PersonService $personService
    )
    {
        GeneralService::makeMultipleDirectories('HR', [
            'documents',
            'signature',
            'images',
        ]);
    }

    public function create($slug = null): Factory|View|Application
    {
        if ($slug) {
            $slug = Role::whereSlug($slug)->value('id');
        }
        $pageTitle = trans('general.register');
        return view('website.register.index', compact('pageTitle', 'slug'));
    }

    public function store(PersonRequest $request)
    {
        $model = $this->personService->store($request->all());
        if ($model) {
            return redirect()->route('website.pricing-plans.index');
        }
    }
}
