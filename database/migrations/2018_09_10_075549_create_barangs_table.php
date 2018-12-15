<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_barang')->unique();
            $table->string('gambar');
            $table->string('nama_barang')->unique();
            $table->text('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('slug');
            $table->unsignedInteger('id_kategoris');
            $table->foreign('id_kategoris')->references('id')->on('kategoris')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
