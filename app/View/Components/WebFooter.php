<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WebFooter extends Component
{
    public mixed $cPage;
    public function __construct($cPage)
    {
        $this->cPage = $cPage;
    }
    public function render()
    {
        return view('components.website-footer');
    }
}
