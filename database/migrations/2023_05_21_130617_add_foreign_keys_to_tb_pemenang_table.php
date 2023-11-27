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
        Schema::table('tb_pemenang', function (Blueprint $table) {
            $table->foreign(['id_lukisan'], 'tb_pemenang_ibfk_1')->references(['id_lukisan'])->on('tb_lukisan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_periode_bidding'], 'tb_pemenang_ibfk_3')->references(['id_periode_bidding'])->on('tb_periode_bidding')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_user'], 'tb_pemenang_ibfk_2')->references(['id_user'])->on('tb_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_pemenang', function (Blueprint $table) {
            $table->dropForeign('tb_pemenang_ibfk_1');
            $table->dropForeign('tb_pemenang_ibfk_3');
            $table->dropForeign('tb_pemenang_ibfk_2');
        });
    }
};
