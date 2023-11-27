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
        Schema::create('tb_lukisan', function (Blueprint $table) {
            $table->integer('id_lukisan', true);
            $table->integer('id_pelukis')->nullable()->index('id_pelukis');
            $table->string('judul_lukisan', 100);
            $table->text('deskripsi_lukisan');
            $table->string('foto_lukisan', 150);
            $table->decimal('harga_awal', 10, 0);
            $table->enum('status_lukisan', ['Aktif', 'Tidak Aktif']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_lukisan');
    }
};
