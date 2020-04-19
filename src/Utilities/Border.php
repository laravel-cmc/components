<?php

namespace LaravelCMC\Components\Utilities;

use Illuminate\Support\Str;

trait Border
{
    /**
     * @param string|null $border border, add[null|top|right|bottom|left], sub[null|top|right|bottom|left], color, radius[null|top|right|bottom|left|circle|pill|0], sm|lg
     * @return string
     */
    public function borderClass(string $border = null): string {
        $classes = [];

        if ($border) {
            if ($border === "1") {
                $classes[] = 'border';
            }
            else {
                $borderTypes = [];
                $borders = explode(';', $border);
                foreach ($borders as $type) {
                    $borderTypes[trim(Str::before($type, ':'))] = trim(Str::after($type, ':'));
                }

                foreach ($borderTypes as $type => $value) {
                    switch ($type) {
                        case 'add': $classes[] = $type === $value ? 'border' : 'border-'.$value;
                            break;
                        case 'sub': $classes[] = $type === $value ? 'border-0' : 'border-'.$value.'-0';
                            break;
                        case 'color': $classes[] = 'border-'.$value;
                            break;
                        case 'radius': $classes[] = $type === $value ? 'rounded' : 'rounded-'.$value;
                            break;
                        case 'sm':
                        case 'lg': $classes[] = 'rounded-'.$value;
                            break;
                    }
                }
            }
        }

        return implode(' ', $classes);
    }
}
