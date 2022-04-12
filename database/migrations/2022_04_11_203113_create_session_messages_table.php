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
            $table->enum("type", ["text", "audio", "image", "other"]);
            $table->boolean("visibility")->default(true);
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("sessionId");
            $table->timestamps();

            $table->index("userId", "fk_session_messages_users");
            $table->index("sessionId", "fk_session_messages_sessions");

            $table->foreign("userId", "fk_session_messages_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("sessionId", "fk_session_messages_sessions")
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
