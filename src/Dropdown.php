<?php

namespace LaravelCMC\Components;

class Dropdown extends BootstrapComponent
{
    protected $bootstrapClass = 'dropdown';

    public function __construct($tag = null, $content = null, bool $btnGroup = false, bool $up = false, bool $left = false, bool $right = false) {
        if ($btnGroup)
            $this->bootstrapClass = 'btn-group';
        parent::__construct($tag, $content);

        if ($up) $this->element()->addClass('dropup');
        if ($left) $this->element()->addClass('dropleft');
        if ($right) $this->element()->addClass('dropright');
    }
}
