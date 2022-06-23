<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WebsiteBreadCrumb extends Component
{
    public string $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('components.website-bread-crumb');
    }
}
