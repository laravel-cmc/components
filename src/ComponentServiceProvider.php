<?php

namespace LaravelCMC\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * GRID
         */
        // Html
        Blade::component('option',              Option::class);
        Blade::component('optgroup',            Optgroup::class);
        // Container
        Blade::component('container',           Container::class);
        // Row
        Blade::component('row',                 Row::class);
        // Col
        Blade::component('col',                 Col::class);
        /**
         * Components
         */
        // Alert
        Blade::component('alert',               Alert::class);
        Blade::component('alert.heading',       Alert\Heading::class);
        Blade::component('alert.link',          Alert\Link::class);
        Blade::component('alert.dismiss',       Alert\Dismiss::class);
        // Badge
        Blade::component('badge',               Badge::class);
        // Breadcrumb
        Blade::component('breadcrumb',          Breadcrumb::class);
        Blade::component('breadcrumb.item',     Breadcrumb\Item::class);
        // Button
        Blade::component('btn',                 Btn::class);
        Blade::component('btn.toolbar',         Btn\Toolbar::class);
        Blade::component('btn.group',           Btn\Group::class);
        // Card
        Blade::component('card',                Card::class);
        Blade::component('card.body',           Card\Body::class);
        Blade::component('card.footer',         Card\Footer::class);
        Blade::component('card.header',         Card\Header::class);
        Blade::component('card.img',            Card\Img::class);
        Blade::component('card.link',           Card\Link::class);
        Blade::component('card.text',           Card\Text::class);
        Blade::component('card.title',          Card\Title::class);
        Blade::component('card.group',          Card\Group::class);
        Blade::component('card.deck',           Card\Deck::class);
        Blade::component('card.columns',        Card\Columns::class);
        // Nav
        Blade::component('nav',                 Nav::class);
        Blade::component('nav.item',            Nav\Item::class);
        Blade::component('nav.link',            Nav\Link::class);
        Blade::component('nav.content',         Nav\Content::class);
        Blade::component('nav.pane',            Nav\Pane::class);
        // Form
        Blade::component('form',                Form::class);
        Blade::component('form.open',           Form\Open::class);
        Blade::component('form.close',          Form\Close::class);
        Blade::component('form.group',          Form\Group::class);
        Blade::component('form.input',          Form\Input::class);
        Blade::component('form.select',         Form\Select::class);
        Blade::component('form.textarea',       Form\Textarea::class);
        Blade::component('form.control',        Form\Control::class);
        // Collapse
        Blade::component('collapse',            Collapse::class);
        // Dropdown
        Blade::component('dropdown',            Dropdown::class);
        Blade::component('dropdown.divider',    Dropdown\Divider::class);
        Blade::component('dropdown.header',     Dropdown\Header::class);
        Blade::component('dropdown.item',       Dropdown\Item::class);
        Blade::component('dropdown.menu',       Dropdown\Menu::class);
        Blade::component('dropdown.text',       Dropdown\Text::class);
        // Navbar
        Blade::component('navbar',              Navbar::class);
        Blade::component('navbar.brand',        Navbar\Brand::class);
        Blade::component('navbar.collapse',         Navbar\Collapse::class);
        Blade::component('navbar.text',         Navbar\Text::class);
        Blade::component('navbar.toggler',      Navbar\Toggler::class);
    }
}
