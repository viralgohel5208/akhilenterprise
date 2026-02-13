<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up(): void{
        Schema::create('footer_data', function (Blueprint $table) {
            $table->id();
            $table->longText('footer_description')->nullable();
            $table->text('footer_logo')->nullable();
            $table->longText('footer_menu')->nullable();
            $table->longText('footer_product')->nullable();
            $table->text('copyright_text')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('footer_data');
    }
};
