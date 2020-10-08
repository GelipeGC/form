<?php
namespace Fguzman;

use Illuminate\View\Component;

class Form extends Component
{
    public function render()
    {
        return view('fguzman-form::form');
    }
}