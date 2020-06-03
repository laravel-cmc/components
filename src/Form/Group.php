<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;

class Group extends BootstrapComponent
{
    public $row;

    public $name;

    public $invalid;

    protected $bootstrapClass = 'form-group';

    /**
     * Group constructor.
     * @param null $tag
     * @param null $content
     * @param bool $row
     * @param string|null $name
     * @param string $invalid
     */
    public function __construct($tag = null, $content = null, bool $row = false, string $name = null, string $invalid = 'feedback') {
        parent::__construct($tag, $content);

        $this->row = $row;
        $this->name = $name;
        $this->invalid = $invalid;
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
            @isset($name)
                @error($name)
                <div class="invalid-{{$invalid}}">{{ $message }}</div>
                @enderror
            @endisset
        </{{ $element()->tag }}>
        blade;
    }
}
