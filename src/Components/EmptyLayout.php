<?php

namespace Baconfy\Ui\Components;

use Illuminate\View\Component;

class EmptyLayout extends Component
{
    /**
     * Get the view / view contents that represent the component.
     */
    public function render()
    {
        return view('ui::layouts.empty');
    }
}