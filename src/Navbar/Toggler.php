<?php

namespace LaravelCMC\Components\Navbar;

use LaravelCMC\Components\Btn;

class Toggler extends Btn
{
    protected $bootstrapClass = 'navbar-toggler';

    public function __construct(
        $tag = 'button', $type = 'button', $name = null, $theme = null, $value = null, string $label = null, $grid = null, $block = null,
        bool $active = false, bool $disabled = false, $checked = null, string $id = null, string $toggle = 'collapse', string $target = null, string $parent = null,
        bool $toggled = false, bool $split = false
    ) {
        parent::__construct($tag, $type, $name, $theme, $value, $label, $grid, $block, $active, $disabled, $checked, $id, $toggle, $target, $parent, $toggled, $split);
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
            @if (empty($element()->content) && $slot->isEmpty())
            <span class="navbar-toggler-icon"></span>
            @endif
        </{{ $element()->tag }}>
        blade;
    }
}
