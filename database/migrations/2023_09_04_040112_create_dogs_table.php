<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('breed');
            $table->string('age')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->string('weight')->nullable();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
