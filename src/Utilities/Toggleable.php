<?php

namespace LaravelCMC\Components\Utilities;

trait Toggleable
{
    public function setToggleableAttributes(string $toggle = null, string $target = null, string $parent = null, bool $toggled = false, bool $split = false) {
        if (isset($toggle)) {
            $this->element()->setAttribute('data-toggle', $toggle);

            if ($this->element()->tag == 'a') {
                $this->element()->setAttribute('role', 'button');
                $this->element()->setAttribute('href', $target);
            }
            else {
                $this->element()->setAttribute('data-target', $target);
            }

            if (isset($parent))
                $this->element()->setAttribute('data-parent', $parent);

            if ($split)
                $this->element()->addClass('dropdown-toggle-split');

            switch ($toggle) {
                case 'dropdown': $this->element()->addClass('dropdown-toggle');
                    $this->element()->setAttribute('aria-haspopup', 'true');
                    break;
            }

            if ($toggled == false) {
                switch ($toggle) {
                    case 'collapse': $this->element()->addClass('collapsed');
                        break;
                }

                $this->element()->setAttribute('aria-expanded', 'false');
            }
            else {
                $this->element()->setAttribute('aria-expanded', 'true');
            }
        }
    }
}
