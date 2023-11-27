<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodeBidding extends Model
{
    use HasFactory;

    protected $table = 'tb_periode_bidding';
    protected $primaryKey = "id_periode_bidding";
    public $timestamps = false;

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'status_periode',
        'judul_event',
        'deskripsi_event',
        'foto_event'
    ];
}
