<?php

namespace LaravelCMC\Components;

class Collapse extends BootstrapComponent
{
    protected $bootstrapClass = 'collapse';

    public function __construct($tag = null, $content = null, bool $show = false) {
        parent::__construct($tag, $content);

        if ($show)
            $this->element()->addClass('show');
    }
}
