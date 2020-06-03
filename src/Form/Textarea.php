<?php

namespace LaravelCMC\Components\Form;

use LaravelCMC\Components\BootstrapComponent;
use LaravelCMC\Components\Model;
use LaravelCMC\Components\Utilities\Size;

class Textarea extends BootstrapComponent
{
    use Size, Model;

    /**
     * @var string
     */
    protected $bootstrapClass = 'form-control';

    /**
     * Textarea constructor.
     * @param string|null $id
     * @param string|null $name
     * @param null $value
     * @param string|null $grid
     */
    public function __construct(
        string $id = null,
        string $name = null,
        $value = null,
        string $grid = null
    ) {
        parent::__construct('textarea', $value);

        $this->element()->addClass($this->sizeClass($grid));

        if (isset($id))
            $this->element()->setAttribute('id', $id);
        if (isset($name)) {
            if (!isset($id))
                $this->element()->setAttribute('id', $name);
            $this->element()->setAttribute('name', $name);
        }
        if ($value = $this->getValue($name, $value))
            $this->element()->content = $value;
    }
}
