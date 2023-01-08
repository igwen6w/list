<?php

namespace Igwen6w\ListSortable;

use Encore\Admin\Form\Field\ListField;

class SortableList extends ListField
{
    protected $view = 'admin::form.listfield';

    protected static $js = [
        'vendor/igwen6w/list-sortable/sortable/dist/sortable.min.js'
    ];

    protected function setupScript()
    {
        parent::setupScript();
        $this->script .= <<<SCRIPT
let sortable_el = $('tbody.list-{$this->column}-table')[0];
new Sortable(sortable_el, {
    animation: 150,
    ghostClass: 'blue-background-class'
});
SCRIPT;

    }

}
