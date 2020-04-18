<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Theme;

class Badge extends BootstrapComponent
{
    use Theme;

    public $tag = 'span';

    /**
     * @var string
     */
    protected $bootstrapClass = 'badge';

    /**
     * Alert constructor.
     * @param string $tag
     * @param null $theme
     * @param null $content
     * @param bool $pill
     */
    public function __construct($tag = null, $theme = 'primary', $content = null, $pill = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->themeClass($theme));

        if (isset($pill)) {
            $this->element()->addClass('badge-pill');
        }
    }
}
