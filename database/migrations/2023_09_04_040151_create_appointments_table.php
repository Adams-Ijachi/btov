<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->string('status')->nullable();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('doctor_id')->nullable()->constrained();

            $table->boolean('had_surgery')->nullable();
            $table->boolean('had_medications')->nullable();
            $table->boolean('had_examinations')->nullable();

            $table->text('details')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
