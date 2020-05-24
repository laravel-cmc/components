<?php

namespace LaravelCMC\Components;

use LaravelCMC\Components\Utilities\Flex;

class Nav extends BootstrapComponent
{
    use Flex;

    protected $bootstrapClass = 'nav';

    public function __construct(
        $tag = 'nav',
        $content = null,
        string $justify = null,
        bool $vertical = false,
        bool $tabs = false,
        bool $pills = false,
        bool $fill = false,
        bool $justified = false,
        string $slug = null,
        string $id = null,
        bool $card = false
    ) {
        parent::__construct($tag, $content);

        if ($id)
            $this->element()->setAttribute('id', $id);
        $this->element()->addClass($this->justifyClass($justify));
        $this->element()->addClass($vertical ? 'flex-column' : null);
        $this->element()->addClass($tabs ? $this->bootstrapClass.'-tabs' : null);
        $this->element()->addClass($pills ? $this->bootstrapClass.'-pills' : null);
        $this->element()->addClass($fill ? $this->bootstrapClass.'-fill' : null);
        $this->element()->addClass($justified ? $this->bootstrapClass.'-justified' : null);

        if ($card) {
            $this->element()->addClass($tabs ? 'card-header-tabs' : 'card-header-pills');
        }
        if ($slug) {
            $this->element()->setAttribute('role', 'tablist');
            if (empty($id)) {
                $slug === '1'
                    ? $this->element()->setAttribute('id', 'nav-'.uniqid().'Tab')
                    : $this->element()->setAttribute('id', $slug.'Tab');
            }
        }
    }
}
