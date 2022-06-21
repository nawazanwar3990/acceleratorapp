<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EditId extends Component
{
    public string $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('components.edit-id');
    }
}
