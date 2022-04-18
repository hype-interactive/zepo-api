<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {

            $table->id();
            $table->string("channel");
            $table->enum("type", ["mobile", "bank", "cash"]);
            $table->text("callbackString");
            $table->uuid("orderId")->nullable(false);
            $table->timestamps();

            $table->index("orderId", "fk_payments_orders");

            $table->foreign("orderId", "fk_payments_orders")
                ->references("id")->on("orders")
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
        Schema::dropIfExists('payments');
    }
}
