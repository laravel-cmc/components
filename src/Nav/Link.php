<?php

namespace LaravelCMC\Components\Nav;

use  LaravelCMC\Components\BootstrapComponent;

class Link extends BootstrapComponent
{
    public $tag = 'a';

    protected $bootstrapClass = 'nav-link';

    /**
     * Link constructor.
     * @param null $tag
     * @param null $content
     * @param bool $active
     * @param bool $disabled
     * @param string|null $slug
     * @param bool $tab
     * @param bool $pill
     */
    public function __construct($tag = null, $content = null, bool $active = false, bool $disabled = false, string $slug = null, bool $tab = false, bool $pill = false) {
        parent::__construct($tag, $content);

        if ($active) {
            $this->element()->addClass('active');
        }

        if ($disabled) {
            $this->element()->addClass('disabled');
            $this->element()->setAttribute('tabindex', '-1');
            $this->element()->setAttribute('aria-disabled', 'true');
        }
        if ($slug) {
            $this->element()->setAttribute('role', 'tab');
            $this->element()->setAttribute('data-toggle', $tab ? 'tab' : 'pill');
            $this->element()->setAttribute('href', '#nav-'.$slug);
            $this->element()->setAttribute('aria-controls', 'nav-'.$slug);
            $active
                ? $this->element()->setAttribute('aria-selected', 'true')
                : $this->element()->setAttribute('aria-selected', 'false');

            if (empty($id)) {
                $this->element()->setAttribute('id', 'nav-'.$slug.'-tab');
            }
        }
    }
}
