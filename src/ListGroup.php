<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Grid;

class ListGroup extends BootstrapComponent
{
    use Grid;

    protected $bootstrapClass = 'list-group';

    /**
     * ListGroup constructor.
     * @param string $tag
     * @param null $content
     * @param bool $flush
     * @param string|null $horizontal
     */
    public function __construct($tag = 'ul', $content = null, bool $flush = false, string $horizontal = null) {
        parent::__construct($tag, $content);

        $this->element()->addClass($this->gridable('list-group-horizontal', $horizontal));
        if ($flush) {
            $this->element()->addClass('list-group-flush');
        }
    }
}