<?php

namespace LaravelCMC\Components\Dropdown;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Stateable;

class Item extends BootstrapComponent
{
    use Stateable;

    protected $bootstrapClass = 'dropdown-item';

    /**
     * Item constructor.
     * @param string $tag
     * @param null $content
     * @param string|null $type
     * @param bool $active
     * @param bool $disabled
     */
    public function __construct($tag = 'a', $content = null, string $type = null, bool $active = false, bool $disabled = false) {
        parent::__construct($tag, $content);

        if (in_array($tag, ['button', 'input'])) {
            $this->element()->setAttribute('type', $type ?? 'button');
        }

        $this->setStateableAttributes($active, $disabled);
    }
}
