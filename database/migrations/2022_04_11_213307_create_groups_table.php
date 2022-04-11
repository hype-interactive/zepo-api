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
            $table->boolean("status")->default(1);
            $table->text("description");
            $table->unsignedBigInteger("admin");
            $table->timestamps();

            $table->index("admin","fk_groups_users");

            $table->foreign("admin","fk_groups_users")
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
