<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('kode_equipment')->nullable();
            $table->string('nama_inventaris')->nullable();
            $table->bigInteger('qty_inventaris')->nullable();
            $table->string('id_kategori')->nullable();
            $table->string('id_lokasi')->nullable();
            $table->longText('keterangan_inventaris')->nullable();
            // $table->integer('nilai_awal')->nullable();
            // $table->integer('penyusutan')->nullable();
            // $table->integer('nilai_akhir')->nullable(); nilai_akhir = nilai_awal - penyusutan
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
        Schema::dropIfExists('inventaris');
    }
}
