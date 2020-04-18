<?php

namespace LaravelCMC\Components\Alert;

use LaravelCMC\Components\BootstrapComponent;

class Dismiss extends BootstrapComponent
{

    /**
     * @var string
     */
    protected $bootstrapClass = 'close';

    /**
     * Alert constructor.
     * @param null|string $tag
     * @param null|string $content
     */
    public function __construct($tag = 'button', $content = null) {
        parent::__construct($tag, $content);

        $this->element()->content = $content ?? '<span aria-hidden="true">&times;</span>';
        $this->element()->setAttribute('type', 'button');
        $this->element()->setAttribute('data-dismiss', 'alert');
        $this->element()->setAttribute('aria-label', 'Close');
    }
}
