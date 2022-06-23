<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumahtamu;

class RumahTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahtamu = rumahtamu::all();
        return view('Akomodasi.RumahTamu.rumahtamu',['rumahtamu' => $rumahtamu]);
    }

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = rumahtamu::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = rumahtamu::paginate(5);
        }
        return view('AdminRumahTamu.index', ['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminRumahTamu.tambah');
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
            rumahtamu::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/RumahTamu'),$NamaGambar);

            $rumahtamu = new rumahtamu();
            $rumahtamu->judul = $judul;
            $rumahtamu->deskripsi = $deskripsi;
            $rumahtamu->gambar = $gambar->getClientOriginalName();
            $rumahtamu->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminRumahTamu');
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
        $rumahtamu = rumahtamu::find($id);
        return view('AdminRumahTamu.ubah', ['rumahtamu' => $rumahtamu]);
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
            $rumahtamu = rumahtamu::find($id);
            $rumahtamu->id = $request->id;
            $rumahtamu->judul = $request->judul;
            $rumahtamu->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $rumahtamu->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminRumahTamu');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/RumahTamu'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $rumahtamu = rumahtamu::find($id);
            $rumahtamu->judul = $request->judul;
            $rumahtamu->deskripsi = $request->deskripsi;

            $rumahtamu->gambar = $NamaGambar;

            $rumahtamu->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminRumahTamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumahtamu = rumahtamu::find($id);
        $rumahtamu->delete();

        return back();
    }
}
