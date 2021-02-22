<?php

namespace Baconfy\Ui\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $welcome;

    /**
     * Create the component instance.
     *
     * @param string $title
     * @param string $welcome
     */
    public function __construct(string $title, string $welcome)
    {
        $this->title = $title;
        $this->welcome = $welcome;
    }

    /**
     * Get the view / view contents that represent the component.
     */
    public function render()
    {
        return view('ui::layouts.guest');
    }
}