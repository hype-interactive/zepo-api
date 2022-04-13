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
        Schema::create('sessionRatings', function (Blueprint $table) {
            $table->id();
            $table->string("value");
            $table->unsignedBigInteger("sessionId");
            $table->timestamps();

            $table->index("sessionId", "fk_sessionRatings_sessions");

            $table->foreign("sessionId", "fk_sessionRatings_sessions")
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
        Schema::dropIfExists('sessionRatings');
    }
}
