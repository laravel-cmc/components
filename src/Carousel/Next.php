<?php

namespace LaravelCMC\Components\Carousel;

class Next extends \LaravelCMC\Components\BootstrapComponent
{
    protected $bootstrapClass = 'carousel-control-next';

    public function __construct($tag = 'a', $content = null) {
        parent::__construct($tag, $content);

        $this->element()->setAttribute('role', 'button');
        $this->element()->setAttribute('data-slide', 'next');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        <{{ $element()->tag }} {{ $attributes->merge($element()->attributes) }}>
            {!! $element()->content !!}
            {{ $slot }}
            @if($slot == '' && $element()->content == '')
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            @endif
        </{{ $element()->tag }}>
        blade;
    }
}
