<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_notif', function (Blueprint $table) {
            $table->integer('id_notif', true);
            $table->string('email_tamu', 50);
            $table->string('nama_tamu', 50);
            $table->string('pesan', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_notif');
    }
};

