<?php

namespace LaravelCMC\Components\Utilities;

trait Theme
{
    public function themeClass(string $theme = null) {
        if ($theme) {
            return $this->bootstrapClass.'-'.$theme;
        }
    }
}
