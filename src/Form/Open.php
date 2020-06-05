<?php

namespace LaravelCMC\Components\Form;

use Illuminate\Database\Eloquent\Model;
use LaravelCMC\Components\Form;

class Open extends Form
{
    public function __construct(
        $content = null,
        string $acceptCharset = 'utf-8',
        string $method = 'get',
        Model $model = null,
        string $enctype = null,
        bool $file = false,
        bool $inline = false,
        bool $validation = false
    ) {
        parent::__construct($content, $acceptCharset, $method, $enctype, $file, $inline, $validation);

        self::$model = $model;
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
            {{ $slot }}
        blade;
    }
}
