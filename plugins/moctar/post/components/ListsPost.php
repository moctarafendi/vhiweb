<?php namespace Moctar\Post\Components;


use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Moctar\Post\Models\Posts;
use Illuminate\Support\Facades\DB;



class ListsPost extends ComponentBase
{

	public function componentDetails()
	{
		return [
			'name' => 'Lists Post',
			'description' => 'Lists Post'
		];
	}


	public function onLoad()
	{

		$posts = Db::table('moctar_post_posts')
	    ->select(Db::raw('*, moctar_post_posts.created_at as published_at'))
	    ->join('users', 'moctar_post_posts.user_id', '=', 'users.id')
	    ->get();
	    
	    return $posts;
	}


}