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
        Schema::create('asbabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nip')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->string('division');
            $table->bigInteger('hp');
            $table->bigInteger('target');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asbabs');
    }
};
