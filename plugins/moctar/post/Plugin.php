<?php namespace Moctar\Post;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

    	return [
    		'Moctar\Post\Components\CreatePost' => 'createPost',
            'Moctar\Post\Components\ListsPost' => 'listsPost',
    		'Moctar\Post\Components\DetailPost' => 'detailPost',
    	];
    }

    public function registerSettings()
    {
    }
}
