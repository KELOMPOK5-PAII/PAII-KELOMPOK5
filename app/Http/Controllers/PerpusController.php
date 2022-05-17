<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perpus;
use Alert;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpus = Perpus::all();
        return view('Perpustakaan.perpustakaan',['perpus' => $perpus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = Perpus::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = Perpus::paginate(5);
        }
        return view('AdminPerpus.index', ['data'=>$data]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('AdminPerpus.tambah');
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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
        ]);

        if ($request->file('gambar')==NULL) {
            Perpus::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Perpus'),$NamaGambar);

            $perpus = new Perpus();
            $perpus->judul = $judul;
            $perpus->deskripsi = $deskripsi;
            $perpus->gambar = $gambar;
            $perpus->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminPerpus');
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
        $perpus = Perpus::find($id);
        return view('AdminPerpus.ubah', ['perpus' => $perpus]);
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
            $perpus = Perpus::find($id);
            $perpus->id = $request->id;
            $perpus->judul = $request->judul;
            $perpus->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $perpus->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminPerpus');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Perpus'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $perpus = Perpus::find($id);
            $perpus->judul = $request->judul;
            $perpus->deskripsi = $request->deskripsi;

            $perpus->gambar = $NamaGambar;

            $perpus->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminPerpus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perpus = Perpus::find($id);
        $perpus->delete();

        return back();
    }

}
