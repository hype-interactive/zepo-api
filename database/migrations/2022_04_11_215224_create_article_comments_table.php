<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->boolean("visibility")->default(1);
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("article_id");
            $table->timestamps();

            $table->index("user_id","fk_article_comments_users");
            $table->index("article_id","fk_article_comments_articles");

            $table->foreign("user_id","fk_article_comments_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("article_id","fk_article_comments_articles")
                ->references("id")->on("articles")
                ->onDelete("no action")
                ->onUpdate("no action");

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_comments');
    }
}
