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
        Schema::create('others_setting', function (Blueprint $table) {
            $table->id();
            $table->string('enable_google_analytic');
            $table->string('name_google_analytic');
            $table->string('enable_google_adsense_code');
            $table->string('name_google_adsense_code');
            $table->string('enable_google_recaptcha');
            $table->string('google_rechaptcha_site_key');
            $table->string('google_rechaptcha_secret_key');
            $table->string('enable_facebook_messenger');
            $table->string('name_facebook_messenger');
            $table->string('enable_facebook_pixel');
            $table->string('name_facebook_pixel');
            $table->string('enable_cookies_agreement');
            $table->string('name_cookies_agreement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('others_setting');
    }
};
