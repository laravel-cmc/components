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
        //Blade::component('button',          Button::class);
        //Blade::component('button.toolbar',  Button\Toolbar::class);
        //Blade::component('button.group',    Button\Group::class);
        // Card
        //Blade::component('card',            Card::class);
    }
}
