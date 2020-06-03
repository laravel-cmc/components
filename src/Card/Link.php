<?php

namespace LaravelCMC\Components\Card;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Text;

class Link extends BootstrapComponent
{
    use Colors, Text;

    public $tag = 'a';

    /**
     * @var string
     */
    protected $bootstrapClass = 'card-link';

    /**
     * Link constructor.
     * @param null $tag
     * @param null $content
     * @param string|null $color
     * @param string|null $text
     */
    public function __construct($tag = null, $content = null, string $color = null, string $text = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->textClass($text));
        $this->element()->addClass($this->colorClass($color));
    }
}
