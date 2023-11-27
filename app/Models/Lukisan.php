<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lukisan extends Model
{
    use HasFactory;

    protected $table = 'tb_lukisan';
    protected $primaryKey = 'id_lukisan';
    public $timestamps = false;

    protected $fillable = [
        'id_pelukis',
        'judul_lukisan',
        'deskripsi_lukisan',
        'foto_lukisan',
        'harga_awal',
        'status_lukisan',
    ];
}
