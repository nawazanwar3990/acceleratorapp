<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CMS\PageService;

class ApplyController extends Controller
{
    public function __construct(
        private PageService       $pageService,
    )
    {

    }
    public function index()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.index',compact('page'));
    }

    public function product()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.product',compact('page'));
    }

    public function equity()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.equity',compact('page'));
    }
    public function team()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.team', compact('page'));
    }

    public function market()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.market', compact('page'));
    }
    public function curiosity()
    {
        $page = $this->pageService->findByCode('apply-now');
        return view('website.apply.curiosity', compact('page'));
    }
}

