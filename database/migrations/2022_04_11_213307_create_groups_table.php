<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {

            $table->id();
            $table->string("name");
            $table->boolean("status")->default(true);
            $table->text("description");
            $table->unsignedBigInteger("adminId");
            $table->timestamps();

            $table->index("adminId", "fk_groups_users");

            $table->foreign("adminId", "fk_groups_users")
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
        Schema::dropIfExists('groups');
    }
}
