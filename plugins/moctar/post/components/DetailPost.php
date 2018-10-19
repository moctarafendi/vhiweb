<?php namespace Moctar\Post\Components;

use Cms\Classes\ComponentBase;
use Moctar\Post\Models\Posts;
use Illuminate\Support\Facades\DB;
use Auth;

class DetailPost extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Detail Post',
            'description' => 'Component untuk menampilkan detail'
        ];
    }

    public function show( $slug = null)
    {
        $user = Auth::getUser();
        $slug = $this->param('slug');
        $posts = Db::table('moctar_post_posts')
                ->select(Db::raw('*, moctar_post_posts.created_at as published_at'))
                ->join('users', 'moctar_post_posts.user_id', '=', 'users.id')
                ->where('slug', $slug)
                ->where('user_id', $user->id)
                ->get();       


        return $posts;
    }
}
