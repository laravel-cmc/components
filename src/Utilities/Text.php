<?php

namespace LaravelCMC\Components\Utilities;

trait Text
{
    /**
     * @param string|null $text
     * @return string
     */
    public function textClass(string $text = null) {
        $classes = [];
        if ($text) {
            $types = explode(',', $text);
            foreach ($types as $type) {
                if (in_array($type, ['bold', 'bolder', 'normal', 'light', 'lighter', 'italic'])) {
                    if ($type == 'italic') {
                        $classes[] = 'font-'.$type;
                    }
                    else {
                        $classes[] = 'font-weight-'.$type;
                    }
                }
                else {
                    $classes[] = 'text-'.$type;
                }
            }
        }
        return implode(' ', $classes);
    }
}
