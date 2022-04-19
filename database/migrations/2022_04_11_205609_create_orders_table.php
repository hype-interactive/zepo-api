<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("amount");
            $table->enum("status", ["pending", "completed", "canceled"])->default("pending");
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("subscriptionPlanId");
            $table->timestamps();

            $table->index("userId", "fk_orders_users");
            $table->index("subscriptionPlanId", "fk_orders_subscription_plans");

            $table->foreign("userId", "fk_orders_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");
                
            $table->foreign("subscriptionPlanId", "fk_orders_subscription_plans")
                ->references("id")->on("subscriptionPlans")
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
        Schema::dropIfExists('orders');
    }
}
