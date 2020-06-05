<?php

namespace LaravelCMC\Components\Card;

use LaravelCMC\Components\BootstrapComponent;

class Img extends BootstrapComponent
{
    public $tag = 'img';
    /**
     * @var string
     */
    protected $bootstrapClass = 'card-img';

    /**
     * Alert constructor.
     * @param null|string $src
     * @param null|string $align top|overlay
     */
    public function __construct($src = null, $align = null) {
        parent::__construct();

        $this->element()->setAttribute('src', $src);
        $this->element()->setAttribute('class', $this->bootstrapClass.'-'.$align);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        <{{ $element()->tag }} {{ $attributes->merge($element()->attributes) }}/>
        blade;
    }
}
