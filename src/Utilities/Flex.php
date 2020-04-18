<?php

namespace LaravelCMC\Components\Utilities;

trait Flex
{
    use Grid;

    /**
     * @param string|null $align start|end|center|baseline|stretch
     * @return string
     */
    public function alignSelfClass(string $align = null): string {
        return $this->gridable('align-self', $align);
    }

    /**
     * @param string|null $align start|end|center|baseline|stretch
     * @return string
     */
    public function alignItemsClass(string $align = null): string {
        return $this->gridable('align-items', $align);
    }

    /**
     * @param string|null $justify start|end|center|between|around
     * @return string
     */
    public function justifyClass(string $justify = null): string {
        return $this->gridable('justify-content', $justify);
    }
}
