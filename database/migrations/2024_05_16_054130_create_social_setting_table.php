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
        Schema::create('social_setting', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('google_option');
            $table->string('google_client_id');
            $table->string('google_client_secret');
            $table->string('twiter_option');
            $table->string('twiter_client_id');
            $table->string('twiter_client_secret');
            $table->string('facebook_option');
            $table->string('facebook_app_id');
            $table->string('facebook_app_secret');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_setting');
    }
};
