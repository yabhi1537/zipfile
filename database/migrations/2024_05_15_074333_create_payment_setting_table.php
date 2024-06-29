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
        Schema::create('payment_setting', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('option');
            $table->string('livesandbox_key');
            $table->string('tokenization_key');
            $table->string('merchant_id');
            $table->string('public_key');
            $table->string('private_key');
            $table->string('app_id');
            $table->string('secret_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_setting');
    }
};
