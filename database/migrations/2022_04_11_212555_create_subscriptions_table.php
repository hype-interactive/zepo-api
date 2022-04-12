<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string("expiry_time");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("subscription_plan_id");
            $table->unsignedBigInteger("payment_id");
            $table->timestamps();

            $table->index("user_id","fk_subscriptions_users");
            $table->index("subscription_plan_id","fk_subscriptions_subscription_plans");
            $table->index("payment_id","fk_subscriptions_payments");

            $table->foreign("user_id","fk_subscriptions_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("subscription_plan_id","fk_subscriptions_subscription_plans")
                ->references("id")->on("subscription_plans")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("payment_id","fk_subscriptions_payments")
                ->references("id")->on("payments")
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
        Schema::dropIfExists('subscriptions');
    }
}
