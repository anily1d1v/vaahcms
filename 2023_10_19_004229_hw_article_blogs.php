<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HwArticleBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('hw_article_blogs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->bigInteger('hw_article_id')->unsigned()->nullable()->index();
            $table->foreign('hw_article_id')->references('id')->on('articles');
            $table->bigInteger('hw_blog_id')->unsigned()->nullable()->index();
            $table->foreign('hw_blog_id')->references('id')->on('blogs');

            $table->boolean('is_active')->nullable()->index();

            $table->bigInteger('created_by')->unsigned()->nullable()->index();
            $table->foreign('created_by')->references('id')->on('articles');
            $table->bigInteger('updated_by')->unsigned()->nullable()->index();
            $table->foreign('updated_by')->references('id')->on('articles');
            $table->bigInteger('deleted_by')->unsigned()->nullable()->index();
            $table->foreign('deleted_by')->references('id')->on('articles');

            $table->timestamps();
            $table->softDeletes();
            $table->index(['created_at', 'updated_at', 'deleted_at']);

        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('hw_article_blogs');
    }
}
