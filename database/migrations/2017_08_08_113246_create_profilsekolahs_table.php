<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilsekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilsekolahs', function (Blueprint $table) {
            $table->increments('id_profil');
            $table->string('profil');
            $table->string('sambutan');
            $table->string('foto_kepsek');
            $table->string('sejarah');
            $table->string('gambar_lokasi');
            $table->string('visi-misi');


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
        Schema::dropIfExists('profilsekolahs');
    }
}
