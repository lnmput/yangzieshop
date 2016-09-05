<?php namespace Yangzie\Shop\Components;

use Cms\Classes\ComponentBase;

class Todo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'todo Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function test()
    {
        return 'test21233';
    }



}