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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('establish')->nullable();
            $table->string('eiin')->nullable();
            $table->string('code')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('website');
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('google_map')->nullable();
            $table->string('logo');
            $table->string('favicon');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
