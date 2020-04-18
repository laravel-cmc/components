<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Theme;

class Alert extends BootstrapComponent
{
    use Theme;

    /**
     * @var string
     */
    protected $bootstrapClass = 'alert';

    /**
     * Alert constructor.
     * @param string $tag
     * @param null $theme
     * @param null $content
     */
    public function __construct($tag = null, $theme = null, $content = null, $dismissible = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->themeClass($theme));
        if (isset($dismissible)) {
            $this->element()->addClass('alert-dismissible fade show');
        }
        $this->element()->setAttribute('role', 'alert');
    }
}
