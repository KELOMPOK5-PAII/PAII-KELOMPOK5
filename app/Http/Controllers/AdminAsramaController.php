<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAsrama;
use Alert;
use Illuminate\Support\Str;

class AdminAsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data = AdminAsrama::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namaasrama', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('jenisasrama', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = AdminAsrama::paginate(5);
        }
        return view('AdminAsrama.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminAsrama.tambah');
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
            'namaasrama'=>'required',
            'gambar' => 'required',
            'lokasi'=>'required',
            'jenisasrama'=>'required',
            'fasilitas'=>'required',
            'gambar1'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('foto')==NULL) {
            AdminAsrama::create([
                'namaasrama' => $request->namaasrama,
                'gambar' => $request->foto,
                'lokasi' => $request->lokasi,
                'jenisasrama' => $request->jenisasrama,
                'fasilitas' => $request->fasilitas,
                'gambar1' => $request->gambar,
                'deskripsi' => $request->deskripsi
            ]);
        } else {
            $namaasrama = $request->namaasrama;

            $gambar = $request->file('gambar');
            $NamaFoto = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Asrama'),$NamaFoto);

            $lokasi = $request->lokasi;

            $jenisasrama = $request->jenisasrama;

            $fasilitas = $request->fasilitas;

            $gambar = $request->file('gambar1');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Asrama'),$NamaGambar);

            $deskripsi = $request->deskripsi;


            $AdminAsrama = new AdminAsrama();
            $AdminAsrama->namaasrama = $namaasrama;
            $AdminAsrama->gambar = $NamaFoto;
            $AdminAsrama->lokasi = $lokasi;
            $AdminAsrama->jenisasrama = $jenisasrama;
            $AdminAsrama->fasilitas = $fasilitas;
            $AdminAsrama->gambar1 = $NamaGambar;
            $AdminAsrama->deskripsi = $deskripsi;
            $AdminAsrama->save();
        }
        alert()->success('Success','Data Berhasil Ditambahkan!');
        return redirect('/AdminAsrama');
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
        $AdminAsrama = AdminAsrama::find($id);
        return view('AdminAsrama.ubah', ['AdminAsrama' => $AdminAsrama]);
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
            'namaasrama'=>'required',
            'lokasi'=>'required',
            'jenisasrama'=>'required',
            'fasilitas'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $AdminAsrama = AdminAsrama::find($id);
            $AdminAsrama->id = $request->id;
            $AdminAsrama->namaasrama = $request->namaasrama;
            $AdminAsrama->lokasi = $request->lokasi;
            $AdminAsrama->jenisasrama = $request->jenisasrama;
            $AdminAsrama->fasilitas = $request->fasilitas;
            $AdminAsrama->deskripsi = $request->deskripsi;

            $gambar = $request->gambar;
            $gambar1 = $request->gambar1;


            $AdminAsrama->save();
            alert()->success('Success','Data Berhasil Diubah!');
            return redirect('/AdminAsrama');

        } else {
            $gambar = $request->file('gambar');
            $NamaFoto = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Asrama'), $NamaFoto);

            $gambar1 = $request->file('gambar1');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar1->move(public_path('Gambar/Asrama'), $NamaGambar);

            $id = $request->id;
            $namaasrama = $request->namaasrama;
            $lokasi = $request->lokasi;
            $jenisasrama = $request->jenisasrama;
            $fasilitas = $request->fasilitas;
            $deskripsi = $request->deskripsi;

            $AdminAsrama = AdminAsrama::find($id);
            $AdminAsrama->id = $request->id;
            $AdminAsrama->namaasrama = $request->namaasrama;
            $AdminAsrama->lokasi = $request->lokasi;
            $AdminAsrama->jenisasrama = $request->jenisasrama;
            $AdminAsrama->fasilitas = $request->fasilitas;
            $AdminAsrama->deskripsi = $request->deskripsi;
            $AdminAsrama->gambar = $NamaFoto;
            $AdminAsrama->gambar1 = $NamaGambar;

            $AdminAsrama->save();
            alert()->success('Success','Data Berhasil Diubah!');
            return redirect('/AdminAsrama');
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
        $AdminAsrama = AdminAsrama::find($id);
        $AdminAsrama->delete();

        return back();
    }


}
