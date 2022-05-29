<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transportasi;
use App\Models\parkiran;

class ParkirandanTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkiran = parkiran::all();
        $transportasi = transportasi::all();
        return view('ParkirandanTransportasi.parkirandantransportasi',
        [
            'parkiran' => $parkiran,
            'transportasi' => $transportasi
        ]);
    }


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = parkiran::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = parkiran::paginate(5);
        }
        return view('AdminParkiran.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('AdminParkiran.tambah');
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
            parkiran::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Parkiran'),$NamaGambar);

            $parkiran = new parkiran();
            $parkiran->judul = $judul;
            $parkiran->deskripsi = $deskripsi;
            $parkiran->gambar = $gambar;
            $parkiran->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminParkiran');
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
        $parkiran = parkiran::find($id);
        return view('AdminParkiran.ubah', ['parkiran' => $parkiran]);
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
            $parkiran = parkiran::find($id);
            $parkiran->id = $request->id;
            $parkiran->judul = $request->judul;
            $parkiran->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $parkiran->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminParkiran');

        } else {
            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Parkiran'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $parkiran = parkiran::find($id);
            $parkiran->judul = $request->judul;
            $parkiran->deskripsi = $request->deskripsi;

            $parkiran->gambar = $NamaGambar;

            $parkiran->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminParkiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parkiran = parkiran::find($id);
        $parkiran->delete();

        return back();
    }

    public function tampil2(Request $request)
    {
        if($request->has('cari')) {
            $judul = transportasi::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = transportasi::paginate(5);
        }
        return view('AdminTransportasi.index', ['data'=>$data]);
    }

    public function create2()
    {
        return view('AdminTransportasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
        ]);

        if ($request->file('gambar')==NULL) {
            transportasi::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Parkiran'),$NamaGambar);

            $transportasi = new transportasi();
            $transportasi->judul = $judul;
            $transportasi->deskripsi = $deskripsi;
            $transportasi->gambar = $gambar;
            $transportasi->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminTransportasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $transportasi = transportasi::find($id);
        return view('AdminTransportasi.ubah', ['transportasi' => $transportasi]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $transportasi = transportasi::find($id);
            $transportasi->id = $request->id;
            $transportasi->judul = $request->judul;
            $transportasi->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $transportasi->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminTransportasi');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Parkiran'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $transportasi = transportasi::find($id);
            $transportasi->judul = $request->judul;
            $transportasi->deskripsi = $request->deskripsi;

            $transportasi->gambar = $NamaGambar;

            $transportasi->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminTransportasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy2($id)
    {
        $transportasi = transportasi::find($id);
        $transportasi->delete();

        return back();
    }
}
