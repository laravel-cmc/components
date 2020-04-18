<?php

namespace LaravelCMC\Components;

use Illuminate\View\Component;

class BootstrapComponent extends Component
{
    public $tag = 'div';

    /**
     * @var array
     */
    public $elements = [];

    /**
     * @var string
     */
    protected $bootstrapClass = '';

    /**
     * BootstrapComponent constructor.
     * @param null $tag
     * @param null $content
     */
    public function __construct($tag = null, $content = null) {
        $this->elements['main'] = new HtmlElement($tag ?? $this->tag, [], $content);
        $this->element('main')->addClass($this->bootstrapClass);
    }

    /**
     * @param null|string $name
     * @return HtmlElement
     */
    public function element(string $name = null): HtmlElement {
        return $this->elements[$name] ?? $this->elements['main'] ?? new HtmlElement();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        <{{ $tag }} {{ $attributes->merge($element()->attributes) }}>
            {!! $element('main')->content !!}
            {{ $slot }}
        </{{ $tag }}>
        blade;
    }
}
