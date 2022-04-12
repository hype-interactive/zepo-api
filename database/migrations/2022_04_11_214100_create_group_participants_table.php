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
        Schema::create('group_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("group_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->index("group_id","fk_group_participants_groups");
            $table->index("user_id","fk_group_participants_users");

            $table->foreign("group_id","fk_group_participants_groups")
                ->references("id")->on("groups")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("user_id","fk_group_participants_users")
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
        Schema::dropIfExists('group_participants');
    }
}
