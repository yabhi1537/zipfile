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
        Schema::create('email_setting2', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('option');
            $table->string('address');
            $table->string('password');
            $table->string('host');
            $table->string('port');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_setting2');
    }
};
