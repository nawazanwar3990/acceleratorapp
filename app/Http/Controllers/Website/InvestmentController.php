<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CMS\PageService;

class InvestmentController extends Controller
{
    public function __construct(
        private PageService       $pageService,
    )
    {

    }
    public function index()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.index',compact('page'));
    }

    public function product()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.product',compact('page'));
    }

    public function equity()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.equity',compact('page'));
    }
    public function team()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.team', compact('page'));
    }

    public function market()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.market', compact('page'));
    }
    public function curiosity()
    {
        $page = $this->pageService->findByCode('investment');
        return view('website.investment.curiosity', compact('page'));
    }
}

