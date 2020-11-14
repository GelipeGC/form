<?php
namespace Fguzman;

use Illuminate\View\Component;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('fguzman-form::field');
    }

}