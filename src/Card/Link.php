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

    public function __construct($tag = null, $content = null, $color = null, string $text = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->textClass($text));
        $this->element()->addClass($this->colorClass($color));
    }
}
