<?php

namespace LaravelCMC\Components\Carousel;

class Item extends \LaravelCMC\Components\BootstrapComponent
{
    protected $bootstrapClass = 'carousel-item';

    /**
     * Inner constructor.
     * @param null $tag
     * @param null $content
     * @param bool $active
     */
    public function __construct($tag = null, $content = null, bool $active = false) {
        parent::__construct($tag, $content);

        if ($active) {
            $this->element()->addClass('active');
        }
    }
}
