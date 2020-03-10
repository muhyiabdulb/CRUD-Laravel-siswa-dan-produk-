<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nisn');
            $table->text('nama_depan');
            $table->text('nama_belakang');
            $table->text('jk');
            $table->text('alamat');
            $table->text('provinsi');
            $table->text('kabupaten');
            $table->text('asal_sekolah');
            $table->text('nilai_rata2_un');
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
        Schema::dropIfExists('siswas');
    }
}
