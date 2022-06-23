<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\koperasi;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koperasi = koperasi::all();
        return view('Koperasi.koperasi',['koperasi' => $koperasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = koperasi::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = koperasi::paginate(5);
        }
        return view('AdminKoperasi.index', ['data'=>$data]);
    }


    public function create()
    {
        return view('AdminKoperasi.tambah');
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
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('gambar')->getClientOriginalName()==NULL) {
            koperasi::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Koperasi'),$NamaGambar);

            $koperasi = new koperasi();
            $koperasi->judul = $judul;
            $koperasi->deskripsi = $deskripsi;
            $koperasi->gambar = $gambar->getClientOriginalName();
            $koperasi->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminKoperasi');
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
        $koperasi = koperasi::find($id);
        return view('AdminKoperasi.ubah', ['koperasi' => $koperasi]);
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
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $koperasi = koperasi::find($id);
            $koperasi->id = $request->id;
            $koperasi->judul = $request->judul;
            $koperasi->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $koperasi->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminKoperasi');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Koperasi'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $koperasi = koperasi::find($id);
            $koperasi->judul = $request->judul;
            $koperasi->deskripsi = $request->deskripsi;

            $koperasi->gambar = $NamaGambar;

            $koperasi->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminKoperasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koperasi = koperasi::find($id);
        $koperasi->delete();

        return back();
    }
}
