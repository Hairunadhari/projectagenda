<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->enum('matapelajaran',['PBO','DDG']);
            $table->string('materipelajaran');
            $table->enum('jenispembelajaran',['Daring','Ofline']);
            $table->string('linkpembelajaran');
            $table->string('absensi');
            $table->string('foto');
            $table->string('kelas');
            $table->string('keterangan');
            $table->time('mulai');
            $table->time('selesai');
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
        Schema::dropIfExists('agendas');
    }
};
