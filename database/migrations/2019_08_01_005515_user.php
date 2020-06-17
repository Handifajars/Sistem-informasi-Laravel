<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user', function (Blueprint $kolom) {
            $kolom->string('username');
            $kolom->string('password');
            $kolom->string('divisi');
            $kolom->timestamps();
        });
         
        Schema::create('admin', function (Blueprint $kolom) {
            $kolom->string('username');
            $kolom->string('password');
            $kolom->timestamps();
        });

        Schema::create('spv', function (Blueprint $kolom) {
            $kolom->string('username');
            $kolom->string('password');
            $kolom->timestamps();
        });

        Schema::create('data_pengajuan', function (Blueprint $kolom) {
            $kolom->string('kebutuhan');
            $kolom->string('keterangan');
            $kolom->string('fungsikebutuhan');
            $kolom->string('divisi');
            $kolom->string('id');
            $kolom->string('waktu');
            $kolom->string('approved');
            $kolom->string('point');
            $kolom->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
