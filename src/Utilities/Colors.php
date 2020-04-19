<?php

namespace LaravelCMC\Components\Utilities;

trait Colors
{
    /**
     * @param string|null $color
     * @return string
     */
    public function colorClass(string $color = null) {
        return $color ? 'text-'.$color : '';
    }

    /**
     * @param string|null $color
     * @return string
     */
    public function bgClass(string $color = null) {
        return $color ? 'bg-'.$color : '';
    }

    /**
     * @param string|null $color
     * @return string
     */
    public function bgGradientClass(string $color = null) {
        return $color ? 'bg-gradient-'.$color : '';
    }
}
