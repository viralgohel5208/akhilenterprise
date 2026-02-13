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
        Schema::create('general_setting', function (Blueprint $table) {
            $table->id();
            $table->longText('description')->nullable();
            $table->text('email')->nullable();
            $table->text('phone_number')->nullable();
            $table->longText('address')->nullable();
            $table->longText('facebook_link')->nullable();
            $table->longText('instagram_link')->nullable();
            $table->longText('linkedin_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_setting');
    }
};
