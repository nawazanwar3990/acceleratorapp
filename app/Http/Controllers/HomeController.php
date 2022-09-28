<?php

namespace App\Http\Controllers;

use App\Services\CMS\DescriptiveService;
use App\Services\CMS\HowItWorkService;
use App\Services\CMS\PageService;
use App\Services\CMS\SliderService;
use App\Services\CMS\WhatWeOfferService;
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
        private DescriptiveService $descriptiveService,
        private WhatWeOfferService $whatWeOfferService,
        private HowItWorkService $howItWorkService,

    )
    {
    }

    public function index(Request $request): View|Factory|Redirector|Application|RedirectResponse
    {
        $page = $this->pageService->findByCode('home');
        $sliders = $this->sliderService->listByPagination();
        $industries = $this->descriptiveService->listByPagination();
        $offers = $this->whatWeOfferService->listByPagination();
        $works = $this->howItWorkService->listByPagination();
        return view('website.index', compact(
                'page',
                'sliders',
                'industries',
                'offers',
                'works'
            )
        );
    }
}
