<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            
            $table->id();
            $table->text("content");
            $table->unsignedBigInteger("user_id");
            $table->boolean("visibility")->default(1);
            $table->timestamps();

            $table->index("user_id","fk_posts_users");
            $table->foreign("user_id","fk_posts_users")
                ->references("id")->on("users")
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
        Schema::dropIfExists('posts');
    }
}
