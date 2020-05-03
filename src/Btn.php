<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Size;
use LaravelCMC\Components\Utilities\Stateable;
use LaravelCMC\Components\Utilities\Theme;
use LaravelCMC\Components\Utilities\Toggleable;

class Btn extends BootstrapComponent
{
    use Theme, Size, Toggleable, Stateable;

    public $type;

    public $name;

    public $active;

    public $checked;

    /**
     * @var string
     */
    protected $bootstrapClass = 'btn';

    /**
     * Button constructor.
     * @param string $tag
     * @param string $type
     * @param null|string $name
     * @param null|string $theme
     * @param null|string $value
     * @param null|string $label
     * @param null|string $grid
     * @param bool $block
     * @param bool $active
     * @param bool $disabled
     * @param bool $checked
     * @param null|string $id
     *
     * @param null|string $toggle
     * @param null|string $target
     * @param null|string $parent
     * @param bool $toggled
     * @param bool $split
     */
    public function __construct(
        $tag = 'button', $type = 'button', $name = null, $theme = null, $value = null, string $label = null,
        $grid = null, $block = null, bool $active = false, bool $disabled = false, $checked = null, string $id  = null,
        string $toggle = null, string $target = null, string $parent = null, bool $toggled = false, bool $split = false
    ) {
        parent::__construct($tag, $value);

        $this->type = $type;
        $this->name = $name;
        $this->active = $active;
        $this->checked = $checked;

        $this->element()->addClass($this->sizeClass($grid));
        $this->element()->addClass($this->themeClass($theme));
        if ($id)
            $this->element()->setAttribute('id', $id);
        if ($block)
            $this->element()->addClass($this->themeClass('block'));
        if ($active)
            $this->element()->addClass('active');

        switch ($tag) {
            case 'a':
                $this->setStateableAttributes($active, $disabled);
                break;
            case 'button':
                $this->element()->setAttribute('type', $type);
                $this->setStateableAttributes($active, $disabled);
            case 'input':
                if ($disabled)
                    $this->element()->setAttribute('disabled');

                if (in_array($type, ['checkbox', 'radio'])) {
                    $this->element('input', 'input', ['type' => $type, 'name' => $name, 'value' => $value], $label);
                    if ($disabled)
                        $this->element('input')->setAttribute('disabled');
                    if ($active ?? $checked)
                        $this->element('input')->setAttribute('checked');
                    if ($id) {
                        $this->element()->unsetAttribute('id');
                        $this->element('input')->setAttribute('id', $id);
                    }
                    else {
                        $this->element('input')->setAttribute('id', uniqid($type == 'checkbox' ? 'checkbox-' : 'radio-'));
                    }
                }
                else {
                    $this->setStateableAttributes($active, $disabled);
                    $this->element()->setAttribute('type', $type);
                    $this->element()->setAttribute('name', $name);
                    $this->element()->setAttribute('value', $value);
                }
        }

        $this->setStateableAttributes($active, $disabled);
        $this->setToggleableAttributes($toggle, $target, $parent, $toggled, $split);

    }

    public function render() {
        return <<<'blade'
            @if ($tag == 'a')
                <a {{ $attributes->merge($element()->attributes) }}>
                    {{ $element()->content }}
                    {{ $slot }}
                </a>
            @elseif ($tag == 'button')
                <button {{ $attributes->merge($element()->attributes) }}>
                    {{ $element()->content }}
                    {{ $slot }}
                </button>
            @elseif ($tag == 'input')
                @if (in_array($type, ['checkbox', 'radio']))
                <label {{ $attributes->merge($element()->attributes) }}>
                    <input {!! $element('input')->attribute() !!}>{{ $element('input')->content }}
                </label>
                @else
                <input {{ $attributes->merge($element()->attributes) }}/>
                @endif
            @endif
        blade;
    }
}
