<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RegisterLayout extends Component
{
    public mixed $page;
    public string $type;
    public string $step;

    public function __construct(
        $page,
        $type,
        $step
    )
    {
        $this->page = $page;
        $this->type = $type;
        $this->step = $step;
    }

    public function render(): View|Factory|Htmlable|string|\Closure|Application
    {
        return view('layouts.register');
    }
}
