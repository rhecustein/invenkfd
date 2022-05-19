<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('kode_equipment')->nullable();
            $table->string('nama_inventaris')->nullable();
            $table->bigInteger('qty_inventaris')->nullable();
            $table->string('id_lokasi')->nullable();
            $table->string('id_kategori')->nullable();
            $table->char('keterangan_inventaris')->nullable();
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
        Schema::dropIfExists('laporans');
    }
}
