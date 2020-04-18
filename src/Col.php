<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Flex;

class Col extends BootstrapComponent
{
    use Flex;

    /**
     * Col constructor.
     * @param string $tag
     * @param null|string $content
     * @param null|string $cols
     * @param null|string $align start|center|end
     * @param null|string $order first|last|1...12
     * @param null|string $offset
     */
    public function __construct($tag = 'div', $content = null, string $cols = null, $align = null, $order = null, $offset = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass(!empty($this->colClass($cols)) ? $this->colClass($cols) : 'col');

        $this->element()->addClass($this->alignSelfClass($align));

        $this->element()->addClass($this->orderClass($order));

        $this->element()->addClass($this->offsetClass($offset));
    }
}
