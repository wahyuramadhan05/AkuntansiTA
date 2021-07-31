<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukubesarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukubesars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idjurnal');
            $table->date('tanggal');
            $table->string('perkiraan');
            $table->integer('ref');
            $table->integer('debet');
            $table->integer('kredit');
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
        Schema::dropIfExists('bukubesars');
    }
}
