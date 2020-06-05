<?php

namespace LaravelCMC\Components\Nav;

use LaravelCMC\Components\BootstrapComponent;

class Content extends BootstrapComponent
{
    protected $bootstrapClass = 'tab-content';

    public function __construct($tag = null, $content = null, string $slug = null) {
        parent::__construct($tag, $content);

        if ($slug) {
            if (empty($id)) {
                $slug === '1'
                    ? $this->element()->setAttribute('id', 'nav-'.uniqid().'Content')
                    : $this->element()->setAttribute('id', $slug.'Content');
            }
        }
    }
}
