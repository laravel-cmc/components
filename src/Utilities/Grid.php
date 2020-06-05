<?php

namespace LaravelCMC\Components\Utilities;

use Illuminate\Support\Str;

trait Grid
{
    /**
     * @param string|null $prefix
     * @param null $grid
     * @return string
     */
    public function gridable(string $prefix = null, $grid = null): string {
        $classes = [];

        if (isset($grid)) {
            $sizeItems = explode(';', $grid);

            foreach ($sizeItems as $size) {
                $sizes[trim(Str::before($size, ':'))] = trim(Str::after($size, ':'));
            }

            foreach ($sizes as $size => $value) {
                if ($size === $value) {
                    $classes[] = $size == 'xs' ? $prefix : $prefix.'-'.$size;
                }
                else {
                    $classes[] = $size == 'xs' ? $prefix.'-'.$value : $prefix.'-'.$size.'-'.$value;
                }
            }
        }

        return implode(' ', $classes);
    }

    public function colClass(string $cols = null): string {
        return $this->gridable('col', $cols);
    }

    public function colsClass(string $cols = null): string {
        return $this->gridable('row-cols', $cols);
    }

    public function orderClass(string $order = null): string {
        return $this->gridable('order', $order);
    }

    public function offsetClass(string $offset = null): string {
        return $this->gridable('offset', $offset);
    }
}
