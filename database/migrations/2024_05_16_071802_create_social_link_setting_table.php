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
        Schema::create('social_link_setting', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('youtube_url');
            $table->string('linkedin_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_link_setting');
    }
};
