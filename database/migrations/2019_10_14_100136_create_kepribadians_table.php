<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepribadiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepribadians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('kep_teman');
            $table->text('aktifitas');
            $table->text('ide');
            $table->text('pendirian1');
            $table->text('pendirian2');
            $table->text('petunjuk1');
            $table->text('pengerjaan');
            $table->text('kepribadian1');
            $table->text('informasi');
            $table->text('kepribadian2');
            $table->text('anggapan');
            $table->text('kepribadian3');
            $table->text('kepentingan');
            $table->text('petunjuk2');
            $table->text('pengalaman');
            $table->text('solusi');
            $table->text('fokus');
            $table->text('tipe1');
            $table->text('tipe2');
            $table->text('tipe3');
            $table->text('menghargai');
            $table->text('pilihan');
            $table->text('talenta1');
            $table->text('talenta2');
            $table->text('fleksibel');
            $table->text('pedoman');
            $table->text('pertindakan1');
            $table->text('pertindakan2');
            $table->text('hubungan1');
            $table->text('hubungan2');
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
        Schema::dropIfExists('kepribadians');
    }
}
