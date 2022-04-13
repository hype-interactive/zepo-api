<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->boolean("status")->default(true);
            $table->unsignedBigInteger("clientId");
            $table->unsignedBigInteger("consultantId");
            $table->unsignedBigInteger("roomId");
            $table->timestamps();

            $table->index("clientId", "fk_sessions_users_clients");
            $table->index("consultantId", "fk_sessions_users_consultants");
            $table->index("roomId", "fk_sessions_rooms");

            $table->foreign("clientId", "fk_sessions_users_clients")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("consultantId", "fk_sessions_users_consultants")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("roomId", "fk_sessions_rooms")
                ->references("id")->on("rooms")
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
        Schema::dropIfExists('sessions');
    }
}
