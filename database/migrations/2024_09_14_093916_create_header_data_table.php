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
        Schema::create('header_data', function (Blueprint $table) {
            $table->id();
            $table->text('top_header_email')->nullable();
            $table->text('top_header_mobile_no')->nullable();
            $table->text('site_name')->nullable();
            $table->text('header_logo')->nullable();
            $table->longText('header_menu_link')->nullable();
            $table->text('header_button_name')->nullable();
            $table->text('header_button_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_data');
    }
};
