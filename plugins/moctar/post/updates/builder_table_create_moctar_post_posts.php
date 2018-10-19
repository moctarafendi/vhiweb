<?php namespace Moctar\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoctarPostPosts extends Migration
{
    public function up()
    {
        Schema::create('moctar_post_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('title');
            $table->text('slug');
            $table->text('content');
            $table->text('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moctar_post_posts');
    }
}
