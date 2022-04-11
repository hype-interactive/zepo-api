<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_ratings', function (Blueprint $table) {
            $table->id();
            $table->string("value");
            $table->unsignedBigInteger("session_id");
            $table->timestamps();

            $table->index("session_id","fk_session_ratings_sessions");

            $table->foreign("session_id","fk_session_ratings_sessions")
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
        Schema::dropIfExists('session_ratings');
    }
}
