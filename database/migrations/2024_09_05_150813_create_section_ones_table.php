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
        Schema::create('section_ones', function (Blueprint $table) {
            $table->id(); // Campo id
            $table->string('span'); // Campo span
            $table->string('firstText'); // Campo firstText
            $table->string('secondText'); // Campo secondText
            $table->string('button'); // Campo botao
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_ones');
    }
};
