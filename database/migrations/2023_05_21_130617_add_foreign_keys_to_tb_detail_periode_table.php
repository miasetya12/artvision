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
        Schema::table('tb_detail_periode', function (Blueprint $table) {
            $table->foreign(['id_lukisan'], 'tb_detail_periode_ibfk_1')->references(['id_lukisan'])->on('tb_lukisan')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['id_periode_bidding'], 'tb_detail_periode_ibfk_2')->references(['id_periode_bidding'])->on('tb_periode_bidding')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_detail_periode', function (Blueprint $table) {
            $table->dropForeign('tb_detail_periode_ibfk_1');
            $table->dropForeign('tb_detail_periode_ibfk_2');
        });
    }
};
