<?php

namespace LaravelCMC\Components\Navbar;

use LaravelCMC\Components\BootstrapComponent;

class Collapse extends BootstrapComponent
{
    protected $bootstrapClass = 'collapse navbar-collapse';

    /**
     * Collapse constructor.
     * @param null $tag
     * @param null $content
     * @param bool $show
     */
    public function __construct($tag = null, $content = null, bool $show = false) {
        parent::__construct($tag, $content);

        if ($show)
            $this->element()->addClass('show');
    }
}
