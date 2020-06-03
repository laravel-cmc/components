<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Model;
use LaravelCMC\Components\Utilities\Size;

class Input extends BootstrapComponent
{
    use Size, Model;

    /**
     * Input constructor.
     *
     * @param string $type
     * @param string|null $id
     * @param string|null $name
     * @param null $value
     * @param bool $checked
     * @param string|null $grid
     * @param string|null $src
     */
    public function __construct(
        string $type = 'text',
        string $id = null,
        string $name = null,
        $value = null,
        bool $checked = false,
        string $grid = null,
        string $src = null
    ) {
        $this->type = $type;
        $this->value = $value ?? 0;

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

        parent::__construct('input', null);

        $this->element()->addClass($this->sizeClass($grid));
        $this->element()->setAttribute('type', $type);


        if (isset($id))
            $this->element()->setAttribute('id', $id);
        if (isset($name)) {
            if (!isset($id))
                $this->element()->setAttribute('id', $name);
            $this->element()->setAttribute('name', $name);
        }
        if ($checked)
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

                if ($value = $this->getValue($name, $value)) {
                    if (in_array($type, ['checkbox', 'radio'])) {
                        if ($this->value == $value)
                            $this->element()->setAttribute('checked', true);
                        if ($type == 'radio' && (empty($id) || $id == $name))
                            $this->element()->setAttribute('id', uniqid('radio-'));
                    }
                    $this->element()->setAttribute('value', $value);
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
            <{{ $element()->tag }} {{ $attributes->merge($element()->attributes) }}/>
        blade;
    }
}
