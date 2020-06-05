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
     * @param null|string $tag
     * @param null|string $theme primary|secondary|success|danger|warning|info|light|dark
     * @param null $content
     * @param bool $dismissible false
     */
    public function __construct(string $tag = null, string $theme = null, $content = null, bool $dismissible = false) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->themeClass($theme));
        if ($dismissible) {
            $this->element()->addClass('alert-dismissible fade show');
        }
        $this->element()->setAttribute('role', 'alert');
    }
}
