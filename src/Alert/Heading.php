<?php

namespace LaravelCMC\Components\Alert;

use LaravelCMC\Components\BootstrapComponent;

class Heading extends BootstrapComponent
{
    public $tag = 'h4';
    /**
     * @var string
     */
    protected $bootstrapClass = 'alert-heading';
}
