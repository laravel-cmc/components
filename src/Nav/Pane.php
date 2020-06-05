<?php

namespace LaravelCMC\Components\Nav;

use LaravelCMC\Components\BootstrapComponent;

class Pane extends BootstrapComponent
{
    protected $bootstrapClass = 'tab-pane fade';

    /**
     * Pane constructor.
     * @param null $tag
     * @param null $content
     * @param bool $active
     * @param string|null $slug
     */
    public function __construct($tag = null, $content = null, bool $active = false, string $slug = null) {
        parent::__construct($tag, $content);

        if ($slug) {
            $this->element()->setAttribute('role', 'tabpanel');
            $this->element()->setAttribute('aria-labelledby', 'nav-'.$slug.'-tab');
            $active
                ? $this->element()->addClass('show active')
                : null;

            if (empty($id)) {
                $this->element()->setAttribute('id', 'nav-'.$slug);
            }
        }
    }
}
