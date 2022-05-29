<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pos;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = pos::all();
        return view('PosSatpam.pos',['pos' => $pos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = pos::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = pos::paginate(5);
        }
        return view('AdminPosSatpam.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('AdminPosSatpam.tambah');
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
            pos::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Pos'),$NamaGambar);

            $pos = new pos();
            $pos->judul = $judul;
            $pos->deskripsi = $deskripsi;
            $pos->gambar = $gambar;
            $pos->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminPosSatpam');
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
        $pos = pos::find($id);
        return view('AdminPosSatpam.ubah', ['pos' => $pos]);
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
            $pos = pos::find($id);
            $pos->id = $request->id;
            $pos->judul = $request->judul;
            $pos->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $pos->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminPosSatpam');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Pos'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $pos = pos::find($id);
            $pos->judul = $request->judul;
            $pos->deskripsi = $request->deskripsi;

            $pos->gambar = $NamaGambar;

            $pos->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminPosSatpam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos = pos::find($id);
        $pos->delete();

        return back();
    }
}
