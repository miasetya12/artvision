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
        Schema::create('tb_periode_bidding', function (Blueprint $table) {
            $table->integer('id_periode_bidding', true);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status_periode', ['Aktif', 'Non-Aktif']);
            $table->string('judul_event', 100);
            $table->text('deskripsi_event');
            $table->string('foto_event', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_periode_bidding');
    }
};
