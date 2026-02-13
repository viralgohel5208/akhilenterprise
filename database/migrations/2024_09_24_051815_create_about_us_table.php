<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('intro_content')->nullable();
            $table->text('intro_image')->nullable();
            $table->text('heading')->nullable();
            $table->text('pre_heading')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('button_name')->nullable();
            $table->text('button_link')->nullable();
            $table->longText('infra_heading')->nullable();
            $table->text('infra_pre_heading')->nullable();
            $table->longText('page_title')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->text('banner_image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('about_us');
    }
};
