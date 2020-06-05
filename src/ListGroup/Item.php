<?php

namespace LaravelCMC\Components\ListGroup;

use LaravelCMC\Components\Utilities\Stateable;

class Item extends \LaravelCMC\Components\BootstrapComponent
{
    use Stateable;

    protected $bootstrapClass = 'list-group-item';

    /**
     * Item constructor.
     * @param string $tag
     * @param null $content
     * @param bool $active
     * @param bool $disabled
     * @param bool $action
     */
    public function __construct($tag = 'li', $content = null, bool $active = false, bool $disabled = false, bool $action = false)
    {
        parent::__construct($tag, $content);

        if ($action) {
            $this->element()->addClass('list-group-item-action');
        }
        $this->setStateableAttributes($active, $disabled);
    }
}