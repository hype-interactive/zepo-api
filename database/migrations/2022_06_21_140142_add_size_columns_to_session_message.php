<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizeColumnsToSessionMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessionMessages', function (Blueprint $table) {
            //
            $table->integer("height")->nullable();
            $table->integer("width")->nullable();
            $table->bigInteger("bytes")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessionMessages', function (Blueprint $table) {
            //
        });
    }
}
