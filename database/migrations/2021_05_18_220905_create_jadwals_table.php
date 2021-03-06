<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('user_id'); //buat ambil jabatan sama id user
            $table->bigInteger('tahun_akademik_id')->unsigned();
            $table->string('tgl_awal_isi');
            $table->string('tgl_akhir_isi');
            $table->string('tipe');
            $table->timestamps();


            $table->foreign("tahun_akademik_id")->references("id")->on("tahunakademiks")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
