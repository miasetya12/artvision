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
        Schema::create('tb_detail_periode', function (Blueprint $table) {
            $table->integer('id_detail_periode', true);
            $table->integer('id_periode_bidding')->index('id_periode_bidding');
            $table->integer('id_lukisan')->index('id_lukisan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_detail_periode');
    }
};
