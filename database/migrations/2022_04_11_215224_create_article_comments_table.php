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
            $table->boolean("visibility")->default(true);
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("articleId");
            $table->timestamps();

            $table->index("userId", "fk_article_comments_users");
            $table->index("articleId", "fk_article_comments_articles");

            $table->foreign("userId", "fk_article_comments_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("articleId", "fk_article_comments_articles")
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
