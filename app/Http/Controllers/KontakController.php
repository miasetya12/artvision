<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifikasi=Notifikasi::all();
        return view('notifikasi',compact('notifikasi'));
    }
    public function create()
    {
        return view('user.landing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_tamu = $request->nama_tamu;
        $email_tamu = $request->email_tamu;
        $pesan = $request->pesan;
   
        $notifikasi = new Notifikasi();
        $notifikasi->nama_tamu = $nama_tamu;
        $notifikasi->email_tamu = $email_tamu;
        $notifikasi->pesan = $pesan;

        $notifikasi->save();
        $request->session()->flash('status', 'success');
        $request->session()->flash('message', 'Pesan Berhasil Ditambahkan');
        return redirect('/home');
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
