<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('common_page', function (Blueprint $table) {
            $table->id();
            $table->text('page_name')->nullable();
            $table->text('page_slug')->nullable();
            $table->text('page_type')->nullable();
            $table->text('page_banner_image')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('common_page');
    }
};
