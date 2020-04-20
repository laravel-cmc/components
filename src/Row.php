<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Flex;

class Row extends BootstrapComponent
{
    use Flex;

    /**
     * @var string
     */
    protected $bootstrapClass = 'row';

    /**
     * Row constructor.
     * @param string $tag
     * @param null|string $content
     * @param null|string $cols
     * @param null|string $align start|end|center|baseline|stretch
     * @param null|string $justify start|end|center|between|around
     */
    public function __construct($tag = null, $content = null, $cols = null, $align = null, $justify = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->colsClass($cols));

        $this->element()->addClass($this->alignItemsClass($align));

        $this->element()->addClass($this->justifyClass($justify));
    }
}
