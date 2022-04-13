<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupParticipants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("groupId");
            $table->unsignedBigInteger("userId");
            $table->timestamps();

            $table->index("groupId", "fk_groupParticipants_groups");
            $table->index("userId", "fk_groupParticipants_users");

            $table->foreign("groupId", "fk_groupParticipants_groups")
                ->references("id")->on("groups")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("userId", "fk_groupParticipants_users")
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
        Schema::dropIfExists('groupParticipants');
    }
}
