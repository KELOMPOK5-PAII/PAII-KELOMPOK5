<?php

namespace App\Http\Controllers;

use App\Models\akomodasi;

use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akomodasi = akomodasi::all();
        return view('Akomodasi.akomodasi',['akomodasi' => $akomodasi]);
    }

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = akomodasi::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = akomodasi::paginate(5);
        }
        return view('akomodasi.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akomodasi.tambah');
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
            'foto' => 'required',
        ]);

        if ($request->file('foto')==NULL) {
            akomodasi::create([
                'judul' => $request->judul,
                'link' => $request->link,
                'foto' => $request->foto
            ]);
        } else {
            $judul = $request->judul;
            $link = $request->link;
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'),$NamaFoto);

            $akomodasi = new akomodasi();
            $akomodasi->judul = $judul;
            $akomodasi->link = $link;
            $akomodasi->foto = $NamaFoto;
            $akomodasi->save();
        }
        alert()->success('Success','Data Berhasil Ditambahkan!');
        return redirect('/akomodasi');
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
        $akomodasi = akomodasi::find($id);
        return view('akomodasi.ubah', ['akomodasi' => $akomodasi]);
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
            $akomodasi = akomodasi::find($id);
            $akomodasi->id = $request->id;
            $akomodasi->judul = $request->judul;
            $foto = $request->foto;

            $akomodasi->save();
            alert()->success('Success','Data Berhasil Diubah!');
            return redirect('/akomodasi');

        } else {
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'), $NamaFoto);

            $id = $request->id;
            $judul = $request->judul;

            $akomodasi = akomodasi::find($id);
            $akomodasi->id = $request->id;
            $akomodasi->judul = $request->judul;

            $akomodasi->foto = $NamaFoto;

            $akomodasi->save();
            alert()->success('Success','Data Berhasil Diubah!');
            return redirect('/akomodasi');
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
        $akomodasi = akomodasi::find($id);
        $akomodasi->delete();
        return back();
    }
}
