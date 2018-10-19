<?php namespace Moctar\Post\Models;

use Model;

/**
 * Model
 */
class Posts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'moctar_post_posts';

    // public $attachOne = [
    // 'image' => 'System\Models\File'
    // ];
   
   public $attachOne = [
        'featuredImage' => 'System\Models\File',
    ];


}
