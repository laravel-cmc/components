<?php

namespace LaravelCMC\Components\Card;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Text as TextUtil;

class Text extends BootstrapComponent
{
    use TextUtil, Colors;

    /**
     * @var string
     */
    protected $bootstrapClass = 'card-title';

    public function __construct($tag = 'p', $content = null, $color = null, $bg = null, $bgGradient = null, string $text = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->textClass($text));
        $this->element()->addClass($this->colorClass($color));
        $this->element()->addClass($this->bgClass($bg));
        $this->element()->addClass($this->bgGradientClass($bgGradient));
    }
}
