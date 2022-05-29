<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\klinik;

class KlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klinik = klinik::all();
        return view('Klinik.klinik',['klinik' => $klinik]);
    }



    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = klinik::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = klinik::paginate(5);
        }
        return view('AdminKlinik.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminKlinik.tambah');
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

        if ($request->file('gambar')==NULL) {
            klinik::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Klinik'),$NamaGambar);

            $klinik = new klinik();
            $klinik->judul = $judul;
            $klinik->deskripsi = $deskripsi;
            $klinik->gambar = $gambar;
            $klinik->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminKlinik');
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
        $klinik = klinik::find($id);
        return view('AdminKlinik.ubah', ['klinik' => $klinik]);
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
            $klinik = klinik::find($id);
            $klinik->id = $request->id;
            $klinik->judul = $request->judul;
            $klinik->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $klinik->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminKlinik');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Klinik'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $klinik = klinik::find($id);
            $klinik->judul = $request->judul;
            $klinik->deskripsi = $request->deskripsi;

            $klinik->gambar = $NamaGambar;

            $klinik->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminKlinik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klinik = klinik::find($id);
        $klinik->delete();

        return back();
    }
}

