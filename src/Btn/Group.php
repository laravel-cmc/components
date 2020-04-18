<?php

namespace LaravelCMC\Components\Btn;

use Illuminate\Support\Str;
use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Utilities\Size;

class Group extends BootstrapComponent
{
    use Size;

    /**
     * @var string
     */
    protected $bootstrapClass = 'btn-group';

    /**
     * Group constructor.
     * @param null $tag
     * @param null $content
     * @param bool $toggle
     * @param null $grid
     * @param bool $vertical
     */
    public function __construct($tag = null, $content = null, $toggle = null, $grid = null, $vertical = false) {
        parent::__construct($tag, $content);

        if ($vertical) {
            $this->element()->attributes['class'] = Str::replaceFirst('btn-group', 'btn-group-vertical', $this->element()->attributes['class']);
        }

        if ($toggle) {
            $this->element()->addClass('btn-group-toggle');
            $this->element()->setAttribute('data-toggle', 'buttons');
        }
        else {
            $this->element()->setAttribute('role', 'group');
        }

        $this->element()->addClass($this->sizeClass($grid));
    }
}
