<?php

namespace LaravelCMC\Components\Utilities;

trait Stateable
{
    public function setStateableAttributes(bool $active = false, bool $disabled = false, string $element = null) {
        if ($active) {
            $this->element($element)->addClass('active');
        }

        switch ($this->element($element)->tag) {
            case 'a':
                $this->element($element)->setAttribute('role', 'button');
                if ($active) {
                    $this->element($element)->setAttribute('aria-pressed', 'true');
                }
                if ($disabled) {
                    $this->element($element)->setAttribute('aria-disabled', 'true');
                    $this->element($element)->setAttribute('tabindex', '-1');
                    $this->element($element)->addClass('disabled');
                }
                break;
            case 'li':
                if ($disabled) {
                    $this->element($element)->addClass('disabled');
                    $this->element($element)->setAttribute('aria-disabled', 'true');
                }
                break;
            case 'button':
            case 'input':
                if ($disabled) {
                    $this->element($element)->setAttribute('disabled');
                }
        }

    }
}
