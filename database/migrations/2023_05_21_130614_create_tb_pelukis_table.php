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
        Schema::create('tb_pelukis', function (Blueprint $table) {
            $table->integer('id_pelukis', true);
            $table->string('nama_pelukis', 50);
            $table->string('telp_pelukis', 15);
            $table->text('biografi_pelukis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pelukis');
    }
};
