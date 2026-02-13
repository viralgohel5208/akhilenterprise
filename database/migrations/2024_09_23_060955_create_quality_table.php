<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('quality', function (Blueprint $table) {
            $table->id();
            $table->longText('heading')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->longText('page_title')->nullable();
            $table->text('banner_image')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('quality');
    }
};
