<?php

namespace LaravelCMC\Components\Alert;

use LaravelCMC\Components\BootstrapComponent;

class Link extends BootstrapComponent
{
    public $tag = 'a';
    /**
     * @var string
     */
    protected $bootstrapClass = 'alert-link';
}
