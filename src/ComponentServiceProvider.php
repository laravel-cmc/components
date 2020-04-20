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
    }
}
