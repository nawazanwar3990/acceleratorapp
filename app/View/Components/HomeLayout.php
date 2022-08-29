<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeLayout extends Component
{
    public mixed $page;
    public function __construct($page)
    {
        $this->page = $page;
    }
    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('layouts.home');
    }
}
