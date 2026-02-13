<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('request_catalog', function (Blueprint $table) {
            $table->id();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('email')->nullable();
            $table->text('phone_number')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void{
        Schema::dropIfExists('request_catalog');
    }
};
