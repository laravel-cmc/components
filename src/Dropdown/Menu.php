<?php

namespace LaravelCMC\Components\Dropdown;

use LaravelCMC\Components\BootstrapComponent;

class Menu extends BootstrapComponent
{
    protected $bootstrapClass = 'dropdown-menu';

    public function __construct($tag = null, $content = null, string $labelledby = null) {
        parent::__construct($tag, $content);

        if (isset($labelledby))
            $this->element()->setAttribute('aria-labelledby', $labelledby);
    }
}
