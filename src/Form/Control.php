<?php

namespace LaravelCMC\Components\Form;

use Illuminate\View\Component;

class Control extends Component
{
    public $type;

    /**
     * Control constructor.
     * @param null $id
     * @param null $name
     * @param string $type
     * @param null $value
     * @param null $checked
     * @param null $grid
     * @param null $src
     * @param null $list
     */
    public function __construct($type = 'text', $id = null, $name = null, $value = null, $checked = null, $grid = null, $src = null, $list = null) {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render() {
        return <<<'blade'
        <x-form.input :type="$type ?? null"/>
blade;
    }
}
