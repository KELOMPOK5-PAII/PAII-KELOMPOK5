<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumahdosen;

class RumahDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rumahdosen = rumahdosen::all();
        return view('Akomodasi.RumahDosen.rumahdosen',['rumahdosen' => $rumahdosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = rumahdosen::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namarumahdosen', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = rumahdosen::paginate(5);
        }
        return view('AdminRumahDosen.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('AdminRumahDosen.tambah');
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
            'namarumahdosen'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
        ]);

        if ($request->file('gambar')==NULL) {
            rumahdosen::create([
                'namarumahdosen'=>$request->namarumahdosen,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $namarumahdosen = $request->namarumahdosen;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/RumahDosen'),$NamaGambar);

            $rumahdosen = new rumahdosen();
            $rumahdosen->namarumahdosen = $namarumahdosen;
            $rumahdosen->deskripsi = $deskripsi;
            $rumahdosen->gambar = $gambar;
            $rumahdosen->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminRumahDosen');
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
        $rumahdosen = rumahdosen::find($id);
        return view('AdminRumahDosen.ubah', ['rumahdosen' => $rumahdosen]);
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
            'namarumahdosen'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $rumahdosen = rumahdosen::find($id);
            $rumahdosen->id = $request->id;
            $rumahdosen->namarumahdosen = $request->namarumahdosen;
            $rumahdosen->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $rumahdosen->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminRumahDosen');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000',
            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/RumahDosen'), $NamaGambar);

            $id = $request->id;
            $namarumahdosen = $request->namarumahdosen;
            $deskripsi = $request->deskripsi;

            $rumahdosen = rumahdosen::find($id);
            $rumahdosen->namarumahdosen = $request->namarumahdosen;
            $rumahdosen->deskripsi = $request->deskripsi;

            $rumahdosen->gambar = $NamaGambar;

            $rumahdosen->save();

        }
        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminRumahDosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rumahdosen = rumahdosen::find($id);
        $rumahdosen->delete();

        return back();
    }
}
