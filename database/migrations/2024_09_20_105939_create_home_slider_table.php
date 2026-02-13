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
        Schema::create('home_slider', function (Blueprint $table) {
            $table->id();
            $table->text('banner_image')->nullable();
            $table->longText('banner_heading')->nullable();
            $table->longText('banner_description')->nullable();
            $table->string('image_status')->comment('1=Active, 2=In Active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_slider');
    }
};
