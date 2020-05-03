<?php

namespace LaravelCMC\Components;

use Illuminate\View\Component;

class BootstrapComponent extends Component
{
    protected static $model = null;

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
        isset($tag)
            ? $this->tag = $tag
            : null;

        $this->elements['main'] = new HtmlElement($this->tag, [], $content);
        $this->element('main')->addClass($this->bootstrapClass);
    }

    /**
     * @param string|null $name
     * @param string|null $tag
     * @param array $attributes
     * @param null $content
     * @return HtmlElement
     */
    public function element(string $name = null, string $tag = null, array $attributes = [], $content = null): HtmlElement {
        if ($name === null) {
            return $this->elements['main'];
        }
        elseif (isset($this->elements[$name])) {
            return $this->elements[$name];
        }
        else {
            return $this->elements[$name] = new HtmlElement($tag, $attributes, $content);
        }
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
