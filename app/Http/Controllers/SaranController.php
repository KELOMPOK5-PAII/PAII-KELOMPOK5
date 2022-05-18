<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saran;
use Auth;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran = saran::all();
        return view('Saran.saran',['saran' => $saran]);
    }

    public function tampil()
    {
        $saran = saran::all();
        return view('Saran.datasaran',['saran' => $saran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Saran.datasaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'saran' => 'required',
        ]);

        saran::create([
            'nama' => $request->nama,
            'saran' => $request->saran
        ]);
        alert()->success('Sukses','Saran Berhasil Dikirim');
        return redirect('/saran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saran = saran::find($id);
        $saran->delete();
        return back();
    }

    public function hitung(){
        $saran = saran::count();
    }
}
