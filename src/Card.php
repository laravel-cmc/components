<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Border;
use LaravelCMC\Components\Utilities\Colors;
use LaravelCMC\Components\Utilities\Text;

class Card extends BootstrapComponent
{
    use Colors, Border, Text;

    /**
     * @var string
     */
    protected $bootstrapClass = 'card';

    /**
     * Card constructor.
     * @param null|string $tag
     * @param null|string $content
     * @param null|string $color
     * @param null|string $bg
     * @param null|string $bgGradient
     * @param null|string $border
     * @param null|string $text
     */
    public function __construct(
        string $tag = null,
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
