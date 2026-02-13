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
        Schema::create('infrastructure', function (Blueprint $table) {
            $table->id();
            $table->longText('heading')->nullable();
            $table->longText('short_description')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->comment('1=Active, 2=In Active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infrastructure');
    }
};
