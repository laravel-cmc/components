<?php

namespace LaravelCMC\Components;

class Carousel extends BootstrapComponent
{
    protected $bootstrapClass = 'carousel slide';

    /**
     * Carousel constructor.
     * @param null $tag
     * @param null $content
     * @param string|null $id
     */
    public function __construct($tag = null, $content = null, string $id = null) {
        parent::__construct($tag, $content);

        $this->element()->setAttribute('id', $id ?? uniqid('carousel-'));

        $this->element()->setAttribute('data-ride', 'carousel');
    }
}
