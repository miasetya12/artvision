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
        Schema::create('tb_pemenang', function (Blueprint $table) {
            $table->integer('id_pemenang', true);
            $table->integer('id_lukisan');
            $table->integer('id_periode_bidding')->index('id_periode_bidding');
            $table->integer('id_user')->index('id_user');
            $table->string('nama_lengkap_user', 50);
            $table->decimal('tawaran_harga', 10, 0);
            $table->dateTime('tanggal_pembayaran');
            $table->string('bukti_pembayaran', 150);
            $table->enum('status', ['Valid', 'Tidak Valid']);

            $table->index(['id_lukisan', 'id_periode_bidding', 'id_user'], 'id_lukisan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pemenang');
    }
};
