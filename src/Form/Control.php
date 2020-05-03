<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Model;
use LaravelCMC\Components\Utilities\Size;

class Control extends BootstrapComponent
{
    use Size, Model;

    public $tag = 'input';

    public $type = 'text';

    public $value = null;

    public $list = [];

    public $selected = null;

    protected $bootstrapClass  = 'form-control';
    /**
     * Control constructor.
     * @param null $tag
     * @param null $id
     * @param null $name
     * @param string $type
     * @param null $value
     * @param null $checked
     * @param null $grid
     * @param null $src
     * @param null $list
     */
    public function __construct($tag = null, $type = 'text', $id = null, $name = null, $value = null, $checked = null, $grid = null, $src = null, $list = null) {
        $this->type = $type;

        switch ($type) {
            case 'checkbox':
            case 'radio':
                $this->bootstrapClass = 'form-check-input';
                break;
            case 'file':
                $this->bootstrapClass = 'form-control-file';
                break;
            case 'range':
                $this->bootstrapClass = 'form-control-range';
                break;
            case 'reset':
            case 'submit':
            case 'button':
            $this->bootstrapClass = 'btn';
                break;
            case 'image':
                $this->bootstrapClass = '';
                break;
            default:
                $this->bootstrapClass = 'form-control';
        }
        parent::__construct($tag, null);

        $this->list = $list ?? [];
        $this->element()->addClass($this->sizeClass($grid));
        $this->element()->setAttribute('type', $type);

        if (isset($id))
            $this->element()->setAttribute('id', $id);
        if (isset($name)) {
            if (!isset($id))
                $this->element()->setAttribute('id', $name);
            $this->element()->setAttribute('name', $name);
        }
        if (isset($checked))
            $this->element()->setAttribute('checked', $checked);
        if (!in_array($type, ['file', 'password'])) {
            if (isset($src)) {
                if ($src = $this->getValue($name, $src))
                    $this->element()->setAttribute('src', $src);
            }
            else {
                if ($type == 'date' && $value instanceof DateTime)
                    $value = $value->format('Y-m-d');

                if ($type == 'datetime-local' && $value instanceof DateTime)
                    $value = $value->format('Y-m-d\TH:i:s');

                if ($type == 'month' && $value instanceof DateTime)
                    $value = $value->format('Y-m');

                if ($type == 'time' && $value instanceof DateTime)
                    $value = $value->format('H:i');

                if ($type == 'week' && $value instanceof DateTime)
                    $value = $value->format('Y-\WW');

                if ($value = $this->getValue($name, $value))
                    $this->element()->setAttribute('value', $value);

                if ($type == 'select') {
                    $this->element()->unsetAttribute('value');
                    $this->selected = $value;
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
        @switch($type)
            @case('textarea')
                <textarea {{ $attributes->merge($element()->attributes) }}>
                    {{ $value }}
                    {{ $slot }}
                </textarea>
                @break
            @case('select')
                <select {{ $attributes->merge($element()->attributes) }}>
                    {{ $slot }}
                    @foreach($list as $value => $label)
                    <x-option :value="$value" :label="$label" :selected="($value == $selected ? true : false)"/>
                    @endforeach
                </select>
                @break
            @default
                <{{ $element()->tag }} {{ $attributes->merge($element()->attributes) }}/>
        @endswitch
        blade;
    }
}
