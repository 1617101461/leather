<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrolisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trolis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_barangs');
            $table->foreign('id_barangs')->references('id')->on('barangs')->onDelete('CASCADE');
            $table->unsignedInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('jumlah_barang');
            $table->string('subtotal');
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
        Schema::dropIfExists('trolis');
    }
}
