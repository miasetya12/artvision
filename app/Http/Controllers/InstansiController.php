<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instansi = Instansi::all();
        return view('admin.instansi.index', [
            'instansi'=> $instansi,
            'active' => 'instansi',
        ]);
    }


    public function create()
    {
        return view('admin.instansi.create', [
            'active' => 'instansi',
        ]);


    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_instansi = $request->nama_instansi;
        $deskripsi_instansi = $request->deskripsi_instansi;
    
        $validateData =$request->validate([
            'nama_instansi'=>[
                'required',
                'string'
            ],
            'deskripsi_instansi'=>[
                'required',
                'string'
            ],
            ]);

            $instansi = new Instansi();
           
            $instansi ->nama_instansi=$nama_instansi;
            $instansi ->deskripsi_instansi=$deskripsi_instansi;
        
            $instansi->save();
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Instansi Berhasil Ditambahkan');
            return redirect('/admin/instansi');
    }

    public function edit(Instansi $instansi)
    {
        return view('admin.instansi.edit', [
            // compact(['instansi']),
            'active' => 'instansi',
            'instansi' => $instansi
        ]);
    }

    public function delete($id_instansi)
    {
        DB::table('tb_instansi')->where('id_instansi', $id_instansi)->delete();
        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Instansi Berhasil Dihapus');
        return redirect('/admin/instansi');
    }

    public function update(Request $request, Instansi $instansi)
    {
        $this->validate($request,[
            'nama_instansi'=>[
                'required',
                'string'
            ],
            'deskripsi_instansi'=>[
                'required',
                'string'
            ],
        ]);

        $instansi ->nama_instansi=$request->nama_instansi;
        $instansi ->deskripsi_instansi=$request->deskripsi_instansi;
    
        $instansi->save();

        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Instansi Berhasil Diperbarui');
        return redirect('/admin/instansi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
