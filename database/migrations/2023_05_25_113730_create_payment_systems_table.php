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
        Schema::create('payment_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('setting')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('payment_systems')->insert(
            array(
                'name' => 'PayPal Express',
                'active' => 1
            )
        );

        \Illuminate\Support\Facades\DB::table('payment_systems')->insert(
            array(
                'name' => 'UAPay',
                'active' => 1
            )
        );

        \Illuminate\Support\Facades\DB::table('payment_systems')->insert(
            array(
                'name' => 'WayPay',
                'active' => 1
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_systems');
    }
};
