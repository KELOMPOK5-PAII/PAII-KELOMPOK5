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

    public function tampilkan()
    {
        $saran = saran::all();
        return view('Saran.daftarsaran',['saran' => $saran]);
    }

    public function tampil()
    {
        $saran = saran::all();
        return view('Saran.datasaran',['saran' => $saran]);
    }

    public function tampil2()
    {
        $saran = saran::all();
        return view('Saran.kelolasaran',['saran' => $saran]);
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


    public function create2()
    {
        return view('Saran.kelolasaran');
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
        alert()->success('Sukses','Admin akan mereview saran Anda');
        return redirect('/saran');
    }

    public function verify($id){
        $saran = saran::where('verify', 0);
        // $this->pushNotif('Transaksi Dibatalkan', "Transasi produk ".$transaksi->details[0]->produk->name." berhsil dibatalkan", $transaksi->user->fcm);
        $saran->update([
            'verify' => 1
        ]);
        return redirect('/kelolasaran');
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
