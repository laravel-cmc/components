<?php

namespace LaravelCMC\Components;

class Breadcrumb extends BootstrapComponent
{
    public $tag = 'nav';

    /**
     * Breadcrumb constructor.
     * @param string $tag
     * @param null $content
     */
    public function __construct($tag = null, $content = null) {
        parent::__construct($tag, $content);

        $this->element()->setAttribute('aria-label', 'breadcrumb');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return <<<'blade'
        <{{ $tag }} {{ $attributes->merge($element()->attributes) }}>
            <ol class="breadcrumb">
            {!! $element()->content !!}
            {{ $slot }}
            </ol>
        </{{ $tag }}>
        blade;
    }

}
