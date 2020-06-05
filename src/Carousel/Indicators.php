<?php

namespace LaravelCMC\Components\Carousel;

class Indicators extends \LaravelCMC\Components\BootstrapComponent
{
    public $active, $count, $parentId;

    protected $bootstrapClass = 'carousel-indicators';

    /**
     * Indicators constructor.
     * @param string $tag
     * @param null $content
     * @param string|null $parentId
     * @param int|null $count
     * @param int $active
     */
    public function __construct($tag = 'ol', $content = null, string $parentId = null, int $count = null, int $active = 0) {
        parent::__construct($tag, $content);

        $this->active = $active;
        $this->count = $count;
        $this->parentId = $parentId;
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
                @for($i = 0; $i < $count; $i++)
                <li data-target="#{{ $parentId }}" data-slide-to="{{ $i }}"{!! $active == $i ? ' class="active"' : '' !!}></li>
                @endfor
            @endif
        </{{ $element()->tag }}>
        blade;
    }
}
