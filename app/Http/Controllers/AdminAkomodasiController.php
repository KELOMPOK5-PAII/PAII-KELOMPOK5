<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAkomodasi;
use Alert;


class AdminAkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data = AdminAkomodasi::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = AdminAkomodasi::paginate(5);
        }
        return view('AdminAkomodasi.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminAkomodasi.tambah');
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
            'link'=>'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('foto')==NULL) {
            AdminAkomodasi::create([
                'judul' => $request->judul,
                'link' => $request->link,
                'foto' => $request->foto
            ]);
        } else {
            $judul = $request->judul;
            $link = $request->link;
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('Gambar/Akomodasi'),$NamaFoto);

            $AdminAkomodasi = new AdminAkomodasi();
            $AdminAkomodasi->judul = $judul;
            $AdminAkomodasi->link = $link;
            $AdminAkomodasi->foto = $NamaFoto;
            $AdminAkomodasi->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminAkomodasi');
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
        $AdminAkomodasi = AdminAkomodasi::find($id);
        return view('AdminAkomodasi.ubah', ['AdminAkomodasi' => $AdminAkomodasi]);
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
            'judul' => 'required',
        ]);

        if ($request->file('foto')==NULL) {
            $AdminAkomodasi = AdminAkomodasi::find($id);
            $AdminAkomodasi->id = $request->id;
            $AdminAkomodasi->judul = $request->judul;
            $foto = $request->foto;

            $AdminAkomodasi->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminAkomodasi');

        } else {
           $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            ]);

            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('Gambar/Akomodasi'), $NamaFoto);

            $id = $request->id;
            $judul = $request->judul;

            $AdminAkomodasi = AdminAkomodasi::find($id);
            $AdminAkomodasi->id = $request->id;
            $AdminAkomodasi->judul = $request->judul;

            $AdminAkomodasi->foto = $NamaFoto;

            $AdminAkomodasi->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminAkomodasi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $AdminAkomodasi = AdminAkomodasi::find($id);
        $AdminAkomodasi->delete();
        // alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        // return redirect('/AdminAkomodasi')->with('success', 'Data Telah Dihapus!');
        return back();
    }


}
