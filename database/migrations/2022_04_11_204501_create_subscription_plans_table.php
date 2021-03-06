<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptionPlans', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->string("amount");
            $table->integer("slots");
            $table->enum("mode", ["time", "session"]);
            $table->unsignedBigInteger("days");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptionPlans');
    }
}
