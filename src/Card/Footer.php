<?php

namespace LaravelCMC\Components\Card;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Border;
use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Text;

class Footer extends BootstrapComponent
{
    use Colors, Border, Text;

    /**
     * @var string
     */
    protected $bootstrapClass = 'card-footer';

    /**
     * Body constructor.
     * @param null $tag
     * @param null $content
     * @param string|null $color
     * @param string|null $bg
     * @param string|null $bgGradient
     * @param string|null $border
     * @param string|null $text
     */
    public function __construct(
        $tag = null,
        $content = null,
        string $color = null,
        string $bg = null,
        string $bgGradient = null,
        string $border = null,
        string $text = null
    ) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->textClass($text));
        $this->element()->addClass($this->borderClass($border));
        $this->element()->addClass($this->colorClass($color));
        $this->element()->addClass($this->bgClass($bg));
        $this->element()->addClass($this->bgGradientClass($bgGradient));
    }
}
