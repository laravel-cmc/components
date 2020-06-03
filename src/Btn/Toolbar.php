<?php

namespace LaravelCMC\Components\Btn;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Flex;

class Toolbar extends BootstrapComponent
{
    use Flex;

    /**
     * @var string
     */
    protected $bootstrapClass = 'btn-toolbar';

    /**
     * Alert constructor.
     * @param string $tag
     * @param null|string $content
     * @param null|string $justify
     */
    public function __construct($tag = null, $content = null, $justify = null) {
        parent::__construct($tag, $content);

        $this->element()->setAttribute('role', 'toolbar');

        $this->element()->addClass($this->justifyClass($justify));
    }
}
