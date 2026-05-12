<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productivity_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('lama_waktu');
            $table->integer('penggunaan_buku');
            $table->integer('intensitas_device');
            $table->integer('tingkat_interaksi');
            $table->integer('tingkat_fokus');
            $table->string('label_hasil'); // Kurang Produktif, Produktif Individu, dll.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productivity_logs');
    }
};
