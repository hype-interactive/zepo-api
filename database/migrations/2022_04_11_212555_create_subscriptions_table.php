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
            $table->unsignedBigInteger("userId");
            $table->unsignedBigInteger("subscriptionPlanId");
            $table->unsignedBigInteger("ppaymentId");
            $table->timestamps();

            $table->index("userId", "fk_subscriptions_users");
            $table->index("subscriptionPlanId", "fk_subscriptions_subscriptionPlans");
            $table->index("ppaymentId", "fk_subscriptions_payments");

            $table->foreign("userId", "fk_subscriptions_users")
                ->references("id")->on("users")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("subscriptionPlanId", "fk_subscriptions_subscriptionPlans")
                ->references("id")->on("subscriptionPlans")
                ->onDelete("no action")
                ->onUpdate("no action");

            $table->foreign("ppaymentId", "fk_subscriptions_payments")
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
