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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->integer('id_instansi')->nullable()->index('id_instansi');
            $table->string('nama_lengkap_user', 50);
            $table->string('nama_panggilan_user', 20);
            $table->string('telp_user', 15);
            $table->text('alamat_user');
            $table->text('deskripsi_diri');
            $table->string('email_user', 50);
            $table->string('password');
            $table->enum('role', ['Admin', 'User']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
};
