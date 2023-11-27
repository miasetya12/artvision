<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $table = 'tb_instansi';
    public $timestamps = false;
    protected $primaryKey = "id_instansi";

    protected $fillable = [
        'nama_instansi',
        'deskripsi_instansi',
    ];

}
