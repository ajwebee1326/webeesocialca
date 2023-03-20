<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;
use App\Models\HeaderFooterScript;

class HeaderFooterScriptComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $script;
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
        $this->script = HeaderFooterScript::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.header-footer-script-component');
    }
}
