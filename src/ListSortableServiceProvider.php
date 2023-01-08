<?php

namespace Igwen6w\ListSortable;

use App\Admin\Extensions\igwen6w\ListSortable\src\SortableList;
use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class ListSortableServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ListSortable $extension)
    {
        if (! ListSortable::boot()) {
            return ;
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/igwen6w/list-sortable')],
                'igwen6w-list-sortable'
            );
        }

        Admin::booting(function () {
            Form::extend('listSortable', SortableList::class);
        });
    }
}
