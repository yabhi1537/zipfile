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
        Schema::create('localization_details_setting', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('timezone');
            $table->string('dateformat');
            $table->string('timeformat');
            $table->string('currencysymbol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localization_details_setting');
    }
};
