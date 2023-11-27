<?php

namespace App\Http\Controllers;

use App\Models\Pelukis;
use Illuminate\Http\Request;

class PelukisController extends Controller
{
    public function index() {
        $pelukis = Pelukis::all();
        return view('admin.pelukis.index', [
            'active' => 'pelukis',
            'data_pelukis' => $pelukis
        ]);
    }

    public function create() {
        return view('admin.pelukis.create', [
            'active' => 'pelukis',
        ]);
    }

    public function store(Request $request) {
        $nama_pelukis = $request->nama_pelukis;
        $nomor_telepon = $request->nomor_telepon;
        $biografi_pelukis = $request->biografi_pelukis;
    
        $validateData =$request->validate([
            'nama_pelukis'=>[
                'required',
                'string'
            ],
            'nomor_telepon'=>[
                'required',
                'string'
            ],
            'biografi_pelukis'=>[
                'required',
                'string'
            ],
            ]);

            if(Pelukis::create([
                'nama_pelukis' => $request->nama_pelukis,
                'telp_pelukis' => $request->nomor_telepon,
                'biografi_pelukis' => $request->biografi_pelukis
            ])) {
                $request->session()->flash('status', 'success');
                $request->session()->flash('message', 'Pelukis Berhasil Ditambahkan');
            } else {
                $request->session()->flash('status', 'error');
                $request->session()->flash('message', 'Pelukis Gagal Ditambahkan');
                return back()->withInput();
            }
            return redirect('/admin/pelukis');
    }

    public function edit($id) {
        $data_pelukis = Pelukis::find($id);
        return view('admin.pelukis.edit',[
            'active' => 'pelukis',
            'data_pelukis' => $data_pelukis
        ]);
    }

    public function update(Request $request) {
        $pelukis = Pelukis::find($request->id);
        $validateData =$request->validate([
            'nama_pelukis'=>[
                'required',
                'string'
            ],
            'nomor_telepon'=>[
                'required',
                'string'
            ],
            'biografi_pelukis'=>[
                'required',
                'string'
            ],
        ]);
        $nama_pelukis = $request->nama_pelukis;
        $nomor_telepon = $request->nomor_telepon;
        $biografi_pelukis = $request->biografi_pelukis;

        $pelukis->nama_pelukis = $nama_pelukis;
        $pelukis->telp_pelukis = $nomor_telepon;
        $pelukis->biografi_pelukis = $biografi_pelukis;

        if($pelukis->save()) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Pelukis Berhasil Dirubah');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Pelukis Gagal Dirubah');
            return back()->withInput();
        }
        return redirect('/admin/pelukis');
    }

    public function delete(Request $request, $id) {
        if(Pelukis::destroy($id)) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Pelukis Berhasil Dihapus');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Pelukis Gagal Dihapus');
        }
        return redirect('/admin/pelukis');
    }
}
