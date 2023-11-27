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
        Schema::create('tb_bidding', function (Blueprint $table) {
            $table->integer('id_bidding', true);
            $table->integer('id_lukisan');
            $table->integer('id_user')->index('id_user');
            $table->dateTime('tanggal_waktu');
            $table->decimal('tawaran_harga', 10, 0);
            $table->integer('id_periode_bidding')->index('id_periode_bidding');

            $table->index(['id_lukisan', 'id_user'], 'id_lukisan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bidding');
    }
};
