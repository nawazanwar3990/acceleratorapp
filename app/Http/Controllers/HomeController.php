<?php

namespace App\Http\Controllers;

use App\Services\CMS\PageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    public function __construct(
        private PageService $pageService
    )
    {
    }

    public function index(Request $request): View|Factory|Redirector|Application|RedirectResponse
    {
        $page = $this->pageService->findByCode('home');
        return view('website.index', compact('page'));
    }
}
