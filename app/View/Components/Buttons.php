<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Buttons extends Component
{
    public $save;
    public $savePrint;
    public $saveNew;
    public $cancel;
    public $cancelRoute;
    public $formID;
    public $reset;
    public $fullPaid;
    public $paidField;
    public $totalField;
    public $update;
    public $updatePrint;
    public $upload;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($save = false, $savePrint = false, $saveNew = false, $cancel = false, $reset = false, $fullPaid = false, $update = false, $updatePrint = false, $upload = false, $paidField = null, $totalField = null, $cancelRoute = null, $formID = null)
    {
        $this->save = $save;
        $this->savePrint = $savePrint;
        $this->saveNew = $saveNew;
        $this->cancel = $cancel;
        $this->cancelRoute = $cancelRoute;
        $this->formID = $formID;
        $this->reset = $reset;
        $this->fullPaid = $fullPaid;
        $this->paidField = $paidField;
        $this->totalField = $totalField;
        $this->update = $update;
        $this->updatePrint = $updatePrint;
        $this->upload = $upload;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons');
    }
}
