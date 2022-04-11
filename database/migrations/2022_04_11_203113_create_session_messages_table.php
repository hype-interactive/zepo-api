<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_messages', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->enum("type",["text","audio","image","other"]);
            $table->boolean("visibility")->default(1);
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("session_id");
            $table->timestamps();

            $table->index("user_id","fk_session_messages_users");
            $table->index("session_id","fk_session_messages_sessions");

            $table->foreign("user_id","fk_session_messages_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("session_id","fk_session_messages_sessions")
                ->references("id")->on("sessions")
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
        Schema::dropIfExists('session_messages');
    }
}
