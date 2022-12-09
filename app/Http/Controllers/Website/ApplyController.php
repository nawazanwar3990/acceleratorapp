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
}
