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
        Schema::create('sessionMessages', function (Blueprint $table) {
            $table->id();
            $table->text("content");
            $table->enum("type", ["text", "audio", "image", "other"]);
            $table->boolean("visibility")->default(true);
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("sessionId");
            $table->timestamps();

            $table->index("userId", "fk_sessionMessages_users");
            $table->index("sessionId", "fk_sessionMessages_sessions");

            $table->foreign("userId", "fk_sessionMessages_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("sessionId", "fk_sessionMessages_sessions")
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
        Schema::dropIfExists('sessionMessages');
    }
}
