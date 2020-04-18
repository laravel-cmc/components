<?php

namespace LaravelCMC\Components\Breadcrumb;

use LaravelCMC\Components\BootstrapComponent;

class Item extends BootstrapComponent
{
    public $href;

    /**
     * @var string
     */
    protected $bootstrapClass = 'breadcrumb-item';

    /**
     * Item constructor.
     * @param string $tag
     * @param null $theme
     * @param null $content
     * @param bool $active
     * @param null $href
     */
    public function __construct($tag = 'li', $theme = null, $content = null, $active = null, $href = null) {
        parent::__construct($tag, $content);

        $this->href = $href;
        if (isset($active)) {
            $this->element()->addClass('active');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        <{{ $tag }} {{ $attributes->merge($element()->attributes) }}>
            @isset($href)<a href="{{ $href }}">@endisset
            {!! $element()->content !!}
            {{ $slot }}
            @isset($href)</a>@endisset
        </{{ $tag }}>
        blade;
    }
}
