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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->string('geoip_country')->nullable();
            $table->string('geoip_city')->nullable();
            $table->string('geoip_state')->nullable();
            $table->string('geoip_postal_code')->nullable();
            $table->string('geoip_lat')->nullable();
            $table->string('geoip_lng')->nullable();
            $table->string('g_recaptcha_response')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
