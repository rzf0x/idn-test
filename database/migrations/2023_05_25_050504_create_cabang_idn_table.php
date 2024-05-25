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
        Schema::create('cabang_idn', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cabang');
            $table->integer('kuota_tkj')->nullable();
            $table->integer('kuota_rpl');
            $table->integer('kuota_dkv');
            $table->integer('kuota_smp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabang_idn');
    }
};
