<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = 'tb_notif';
    public $timestamps = true;
    protected $primaryKey = "id_notif";

    protected $fillable = [
        'nama_tamu',
        'email_tamu',
        'pesan',
    ];
}