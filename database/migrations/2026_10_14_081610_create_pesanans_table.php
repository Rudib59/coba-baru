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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_id')->constrained('menus');
            $table->string('nama_pelanggan')->nullable();
            $table->integer('nomor_meja')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('total_harga')->nullable();
            $table->string('status')->enums('diproses','selesai','dibatalkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
