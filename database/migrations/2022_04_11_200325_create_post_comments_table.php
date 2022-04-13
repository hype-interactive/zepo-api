<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postComments', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->boolean("visibility")->default(true);
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("postId");
            $table->timestamps();

            $table->index("userId", "fk_postComments_users");
            $table->index("postId", "fk_postComments_posts");

            $table->foreign("userId", "fk_postComments_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("postId", "fk_postComments_posts")
                ->references("id")->on("posts")
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
        Schema::dropIfExists('postComments');
    }
}
