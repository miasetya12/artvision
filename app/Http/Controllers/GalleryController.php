<?php

namespace App\Http\Controllers;

use App\Models\Lukisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index() {
        // $lukisan = Lukisan::all();
        $lukisan = DB::table('tb_lukisan')
        ->join('tb_pelukis', 'tb_lukisan.id_pelukis', '=', 'tb_pelukis.id_pelukis')
        ->get();
        return view('user.gallery', [
            'active' => 'gallery',
            'data_lukisan' => $lukisan
        ]);
    }

    public function detail($id) {
        $lukisan = DB::table('tb_lukisan')
        ->join('tb_pelukis', 'tb_lukisan.id_pelukis', '=', 'tb_pelukis.id_pelukis')
        ->where('tb_lukisan.id_lukisan', '=', $id)
        ->first();
        
        return view('user.detail-gallery', [
            'active' => 'gallery',
            'data_lukisan' => $lukisan
        ]);
    }
}
