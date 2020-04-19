<?php

namespace LaravelCMC\Components\Card;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Text;

class Title extends BootstrapComponent
{
    use Colors, Text;

    /**
     * @var string
     */
    protected $bootstrapClass = 'card-title';

    public function __construct($tag = 'h5', $content = null, $color = null, $bg = null, $bgGradient = null, string $text = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->textClass($text));
        $this->element()->addClass($this->colorClass($color));
        $this->element()->addClass($this->bgClass($bg));
        $this->element()->addClass($this->bgGradientClass($bgGradient));
    }
}
