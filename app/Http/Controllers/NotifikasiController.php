<?php

namespace App\Http\Controllers;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            
        $notifikasi=Notifikasi::all();
        return view('admin.notifikasi.index',[
            'notifikasi'=> $notifikasi,
            'active' => 'notifikasi',]);
    }


    public function view($id_notif)
    {
        $notifikasi = Notifikasi::find($id_notif);
    
        return view('admin.notifikasi.view-detail', [
                        'active' => 'notifikasi',
                        'notifikasi'=> $notifikasi
        ]);
    }
    

    
    // public function delete($id_notif)
    // {

    //     DB::table('tb_notif')->where('id_notif', $id_notif)->delete();
    //     $request->session()->flash('status', 'success');
    //     $request->session()->flash('message', 'Instansi Berhasil Dihapus');
    //     return redirect('/admin/notifikasi');
    // }

    
    public function delete(Request $request, $id) {
        if(Notifikasi::destroy($id)) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Pelukis Berhasil Dihapus');
        } else {
            $request->session()->flash('status', 'error');
            $request->session()->flash('message', 'Pelukis Gagal Dihapus');
        }
        return redirect('/admin/notifikasi');
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
    public function update(Request $request, string $id)
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
