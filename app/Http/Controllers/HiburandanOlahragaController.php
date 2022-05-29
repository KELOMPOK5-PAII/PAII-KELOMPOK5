<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hiburan;

class HiburandanOlahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hiburan = hiburan::all();
        return view('HiburandanOlahraga.hiburandanolahraga',['hiburan' => $hiburan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = hiburan::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = hiburan::paginate(5);
        }
        return view('AdminHiburanOlahraga.index', ['data'=>$data]);
    }


    public function create()
    {
        return view('AdminHiburanOlahraga.tambah');
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
            hiburan::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Hiburan'),$NamaGambar);

            $hiburan = new hiburan();
            $hiburan->judul = $judul;
            $hiburan->deskripsi = $deskripsi;
            $hiburan->gambar = $gambar;
            $hiburan->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminHiburanOlahraga');
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
        $hiburan = hiburan::find($id);
        return view('AdminHiburanOlahraga.ubah', ['hiburan' => $hiburan]);
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
            $hiburan = hiburan::find($id);
            $hiburan->id = $request->id;
            $hiburan->judul = $request->judul;
            $hiburan->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $hiburan->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminHiburanOlahraga');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Hiburan'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $hiburan = hiburan::find($id);
            $hiburan->judul = $request->judul;
            $hiburan->deskripsi = $request->deskripsi;

            $hiburan->gambar = $NamaGambar;

            $hiburan->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminHiburanOlahraga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hiburan = hiburan::find($id);
        $hiburan->delete();

        return back();
    }
}
