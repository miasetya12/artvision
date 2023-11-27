<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodeBidding;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode=PeriodeBidding::all();
        return view('admin.periode.index',[
            'periode'=> $periode,
            'active' => 'PeriodeBidding',]);
    }

    
    public function create()
    {
        $periode = PeriodeBidding::all();
        $statuses = ['Aktif', 'Non-Aktif'];
        return view('admin.periode.create', [
            'active' => 'PeriodeBidding',
            'periode' => $periode,
            'statuses' => $statuses,
        ]);
         }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $statuses = ['Aktif', 'TidakAktif'];
        $tanggal_mulai = $request->tanggal_mulai;
        $tanggal_selesai = $request->tanggal_selesai;
        $status_periode = $request->status_periode;
        $judul_event = $request->judul_event;
        $deskripsi_event = $request->deskripsi_event;
        $foto_event = $request->foto_event;
    
        $validateData =$request->validate([
            'tanggal_mulai'=>[
                'required'
                // 'date'
            ],
            'tanggal_selesai'=>[
                'required'
                // 'date'
            ],
            'status_periode'=>[
                'required'
            ],  

            // 'status_periode' => 'required|in: Aktif, Tidak Aktif',
            'judul_event'=>[
                'required',
                 'string'
            ],
            'deskripsi_event'=>[
                'required',
                 'string'
            ],
            'foto_event'=>[
                'mimes:jpg,jpeg,png|image|max:2048', 
                'required'
            ]
            ]);

            // $periode = PeriodeBidding::create($validateData);

            $periode = new PeriodeBidding();
           
            $periode ->tanggal_mulai=$tanggal_mulai;
            $periode ->tanggal_selesai=$tanggal_selesai;
            $periode ->status_periode=$status_periode;
            $periode ->judul_event=$judul_event;
            $periode ->deskripsi_event=$deskripsi_event;

            if($request->hasFile('foto_event')){
                $file = $request->file('foto_event');
                $ext = $file->getClientOriginalExtension();
                $filename= time().'.'.$ext;
        
                $file->move('uploads/fotoPeriode', $filename);
                $periode->foto_event = $filename;
                }
            $periode->save();

            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Periode Berhasil Ditambahkan');
            return redirect('/admin/periode');
    }

    public function edit(PeriodeBidding $periode)
    {
        $statuses = ['Aktif', 'Non-Aktif'];
        return view('admin.periode.edit', [
            'active' => 'PeriodeBidding',
            'periode' => $periode,
            'statuses' => $statuses,
        ]);
      
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeriodeBidding $periode)
    {
        
    
        $this ->validate($request,[
            'tanggal_mulai'=>[
                'required',
                'date'
            ],
            'tanggal_selesai'=>[
                'required',
                'date'
            ],
            'status_periode'=>[
                 'required',
            ],
            'judul_event'=>[
                'required',
                'string'
            ],
            'deskripsi_event'=>[
                'required',
                'string'
            ],
           'foto_event'=>[
                'mimes:jpg,jpeg,png|image|max:2048', 
                'required'
            ]
            ]);

            $periode ->tanggal_mulai=$request->tanggal_mulai;
            $periode ->tanggal_selesai=$request->tanggal_selesai;
            $periode ->status_periode=$request->status_periode;
            $periode ->judul_event=$request->judul_event;
            $periode ->deskripsi_event=$request->deskripsi_event;
            $periode ->foto_event=$request->foto_event;
            if($request->hasFile('foto_event')){
                $file = $request->file('foto_event');
                $ext = $file->getClientOriginalExtension();
                $filename= time().'.'.$ext;
        
                $file->move('uploads/fotoPeriode', $filename);
                $periode->foto_event = $filename;
                }
                
            $periode->save();
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Periode Berhasil Ditambahkan');
            return redirect('/admin/periode');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_periode_bidding)

    {
        DB::table('tb_periode_bidding')->where('id_periode_bidding', $id_periode_bidding)->delete();
        return redirect('/admin/periode')->with('message', 'Service Delete Succesfully');
    }
    
}
