<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->longText('product_title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('main_description')->nullable();
            $table->text('product_image')->nullable();
            $table->text('product_banner_image')->nullable();
            $table->string('product_status')->comment('1 > Active, 2 > In Active')->nullable();
            $table->longText('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_category')->onDelete('cascade');
        });
    }

    public function down(): void{
        Schema::dropIfExists('product');
    }
};
