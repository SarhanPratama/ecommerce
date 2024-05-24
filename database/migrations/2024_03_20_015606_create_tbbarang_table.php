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
        Schema::create('tbbarang', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->string('nama');
            $table->bigInteger('idsatuan')->unsigned();
            $table->foreign('idsatuan')->references('id')->on('tbsatuan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('idkategori')->unsigned();
            $table->foreign('idkategori')->references('id')->on('tbkategori')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sawal');
            $table->integer('hb');
            $table->integer('hj');
            $table->string('foto');
            $table->text('desc')->nullable();
            $table->boolean('pajang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbbarang');
    }
};
