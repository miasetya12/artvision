<?php

namespace App\Http\Controllers;

use App\Models\Lukisan;
use Illuminate\Http\Request;

class LukisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lukisan = Lukisan::all();
        return view('admin.lukisan.index', [
            'active' => 'lukisan',
            'data_lukisan' => $lukisan,
        ]);
    }

    public function create()
    {
        
        return view('admin.lukisan.create', [
            'active' => 'lukisan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lukisan $lukisan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lukisan $lukisan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lukisan $lukisan)
    {
        //
    }
}
