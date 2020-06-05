<?php

namespace LaravelCMC\Components\Utilities;

trait Size
{
    public function sizeClass(string $size = null) {
        return isset($size) ? $this->bootstrapClass.'-'.$size : '';
    }
}
