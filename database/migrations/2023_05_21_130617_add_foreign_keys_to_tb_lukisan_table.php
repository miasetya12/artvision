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
        Schema::table('tb_lukisan', function (Blueprint $table) {
            $table->foreign(['id_pelukis'], 'fk_pelukis_lukisan')->references(['id_pelukis'])->on('tb_pelukis')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_lukisan', function (Blueprint $table) {
            $table->dropForeign('fk_pelukis_lukisan');
        });
    }
};
