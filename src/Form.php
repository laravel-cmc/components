<?php

namespace LaravelCMC\Components;

use Illuminate\Support\Str;

class Form extends BootstrapComponent
{
    public $tag = 'form';

    public $method;

    /**
     * Form constructor.
     * @param null $content
     * @param string $acceptCharset
     * @param string $method
     * @param string|null $enctype
     * @param bool $file
     * @param bool $inline
     * @param bool $validation
     */
    public function __construct(
        $content = null,
        string $acceptCharset = 'utf-8',
        string $method = 'get',
        string $enctype = null,
        bool $file = false,
        bool $inline = false,
        bool $validation = false
    ) {
        parent::__construct(null, $content);

        $this->method = Str::upper($method);

        if ($validation) {
            $this->element()->setAttribute('novalidate');
            $this->element()->addClass('needs-validation');
        }
        if ($inline)
            $this->element()->addClass('form-inline');
        $this->element()->setAttribute('accept-charset', Str::upper($acceptCharset));
        $this->element()->setAttribute('method', $this->method !== 'GET' ? 'POST' : $this->method);
        if ($method !== 'get') {
            if (!$enctype) {
                if ($file) {
                    $this->element()->setAttribute('enctype', 'multipart/form-data');
                }
                else {
                    $this->element()->setAttribute('enctype', 'application/x-www-form-urlencoded');
                }
            }
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
            @if ($method !== 'GET')
                @csrf
                @if ($method !== 'POST')
                    @method($method)
                @endif
            @endif
            {!! $element()->content !!}
            {{ $slot }}
        </{{ $element()->tag }}>
        blade;
    }
}
