<?php namespace Moctar\Post\Components;


use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Moctar\Post\Models\Posts;
use Illuminate\Support\Facades\DB;
use Flash;


class CreatePost extends ComponentBase
{


	public function componentDetails()
	{
		return [
			'name' => 'Create Post Form',
			'description' => 'Simple Upload Form'
		];
	}

	public function onSave()
	{
		$posts = new Posts();
		$posts->title = Input::get('title');
		$posts->slug = Input::get('slug');
		$slug = Input::get('slug');		
		$posts->featuredImage = Input::file('featuredImage');
		$posts->content = Input::get('content');
		$posts->user_id = Input::get('user_id');
		$status = $posts->save();
		$path = $posts->featuredImage->getPath();
		Db::table('moctar_post_posts')
		    ->where('id', $posts->id)
		    ->update(['image' => $path]);

		if($status){
			Flash::success('Posting Berhasil!');
			return Redirect()->back();
		}else{
			Flash::success('Posting Gagal!');
			return Redirect()->back();
		}
		

	}

	


}