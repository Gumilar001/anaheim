<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencatatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project')->nullable(false);
            $table->date('tanggal')->nullable(false);
            $table->integer('frontend')->nullable(false);
            $table->integer('jumlahFrontend')->nullable(false);
            $table->integer('uiux')->nullable(false);
            $table->integer('jumlahUiux')->nullable(false);
            $table->integer('backend')->nullable(false);
            $table->integer('jumlahBackend')->nullable(false);
            $table->integer('consultant_it')->nullable(false);
            $table->integer('jumlahConsultantIt')->nullable(false);
            $table->integer('transportasi')->nullable(false);
            $table->integer('jumlahTransportasi')->nullable(false);
            $table->integer('penginapan')->nullable(false);
            $table->integer('jumlahPenginapan')->nullable(false);
            $table->integer('konsumsi')->nullable(false);
            $table->integer('jumlahKonsumsi')->nullable(false);
            $table->integer('pajak')->nullable(false);
            $table->integer('total')->nullable(false);
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
        Schema::dropIfExists('pencatatans');
    }
}