<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;

class Close extends BootstrapComponent
{
    public $tag = 'form';

    public function __construct() {
        parent::__construct();

        self::$model = null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        </{{ $element()->tag }}>
        blade;
    }
}
