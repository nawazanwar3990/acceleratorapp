<?php

namespace App\Http\Controllers;

use App\Services\CMS\DescriptiveService;
use App\Services\CMS\PageService;
use App\Services\CMS\SliderService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    public function __construct(
        private PageService        $pageService,
        private SliderService      $sliderService,
        private DescriptiveService $descriptiveService
    )
    {
    }

    public function index(Request $request): View|Factory|Redirector|Application|RedirectResponse
    {
        $page = $this->pageService->findByCode('home');
        $sliders = $this->sliderService->listByPagination();
        $industries = $this->descriptiveService->listByPagination();
        return view('website.index', compact(
                'page',
                'sliders',
                'industries'
            )
        );
    }
}
