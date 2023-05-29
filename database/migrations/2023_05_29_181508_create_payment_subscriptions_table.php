<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->unsignedBigInteger('payment_system_id')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('subscription_id', 'subscription_fk')
                ->on('subscriptions')
                ->references('id');

            $table->foreign('payment_system_id', 'payment_system_fk')
                ->on('payment_systems')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_subscriptions');
    }
};
