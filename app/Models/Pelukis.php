<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelukis extends Model
{
    use HasFactory;

    protected $table = 'tb_pelukis';
    protected $primaryKey = "id_pelukis";
    public $timestamps = false;

    protected $fillable = [
        'nama_pelukis',
        'telp_pelukis',
        'biografi_pelukis'
    ];
}
