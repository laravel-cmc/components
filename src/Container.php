<?php

namespace LaravelCMC\Components;

class Container extends BootstrapComponent
{
    /**
     * @var string
     */
    protected $bootstrapClass = 'container';

    /**
     * Alert constructor.
     * @param string $tag
     * @param null $theme
     * @param null $content
     */
    public function __construct($tag = null, $content = null, $fluid = false) {
        parent::__construct($tag, $content);

        if ($fluid) {
            $this->element()->setAttribute('class', $this->bootstrapClass.'-fluid');
        }
    }
}
