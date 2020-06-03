<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Model;
use LaravelCMC\Components\Utilities\Size;

class Select extends BootstrapComponent
{
    use Size, Model;

    public $list = [];

    public $selected = null;

    protected $bootstrapClass = 'form-control';

    /**
     * Select constructor.
     *
     * @param string|null $id
     * @param string|null $name
     * @param null $value
     * @param string|null $grid
     * @param array $list
     */
    public function __construct(
        string $id = null,
        string $name = null,
        $value = null,
        string $grid = null,
        $list = []
    ) {
        parent::__construct('select', null);

        $this->list = $list ?? [];
        $this->element()->addClass($this->sizeClass($grid));

        if (isset($id))
            $this->element()->setAttribute('id', $id);
        if (isset($name)) {
            if (!isset($id))
                $this->element()->setAttribute('id', $name);
            $this->element()->setAttribute('name', $name);
        }

        if ($value = $this->getValue($name, $value))
            $this->selected = $value;
    }

    public function render() {
        return <<<'blade'
        <select {{ $attributes->merge($element()->attributes) }}>
            {{ $slot }}
            @foreach($list as $value => $label)
            <x-option :value="$value" :label="$label" :selected="($value == $selected ? true : false)"/>
            @endforeach
        </select>
        blade;
    }
}
