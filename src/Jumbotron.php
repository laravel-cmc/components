<?php

namespace LaravelCMC\Components;

class Jumbotron extends BootstrapComponent
{
    protected $bootstrapClass = 'jumbotron';

    /**
     * Jumbotron constructor.
     * @param null $tag
     * @param null $content
     * @param bool $fluid
     */
    public function __construct($tag = null, $content = null, bool $fluid = false) {
        parent::__construct($tag, $content);

        if ($fluid) {
            $this->element()->addClass('jumbotron-fluid');
        }
    }
}