<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_rooms', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("roomId");
            $table->timestamps();

            $table->index("userId", "fk_consultant_rooms_users");
            $table->index("roomId", "fk_consultant_rooms_rooms");

            $table->foreign("userId", "fk_consultant_rooms_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("roomId", "fk_consultant_rooms_rooms")
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
        Schema::dropIfExists('consultant_rooms');
    }
}
