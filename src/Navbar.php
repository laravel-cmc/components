<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Theme;

class Navbar extends BootstrapComponent
{
    use Colors, Theme;

    protected $bootstrapClass = 'navbar';

    public function __construct(
        $tag = 'nav', $content = null, string $expand = null, string $theme = null, string $bg = null,
        bool $fixedTop = false, bool $fixedBottom = false, bool $stickyTop = false
    ) {
        parent::__construct($tag, $content);

        if ($expand)
            $this->element()->addClass('navbar-expand-'.$expand);

        if ($theme)
            $this->element()->addClass($this->themeClass($theme));

        if ($bg)
            $this->element()->addClass($this->bgClass($bg));

        if ($fixedTop)
            $this->element()->addClass('fixed-top');
        if ($fixedBottom)
            $this->element()->addClass('fixed-bottom');
        if ($stickyTop)
            $this->element()->addClass('sticky-top');
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
        </{{ $element()->tag }}>
        blade;
    }
}
