<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laboratorium;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorium = laboratorium::all();
        return view('Laboratorium.laboratorium',['laboratorium' => $laboratorium]);
    }

    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = laboratorium::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namalab', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = laboratorium::paginate(5);
        }
        return view('AdminLaboratorium.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminLaboratorium.tambah');
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
            'namalab'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('gambar')==NULL) {
            laboratorium::create([
                'namalab'=>$request->namalab,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar,
                'gambar1' =>$request->gambar1
            ]);
        } else {
            $namalab = $request->namalab;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Lab'),$NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1= time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Lab'),$NamaGambar1);

            $laboratorium = new laboratorium();
            $laboratorium->namalab = $namalab;
            $laboratorium->deskripsi = $deskripsi;
            $laboratorium->gambar = $NamaGambar;
            $laboratorium->gambar1 = $NamaGambar1;
            $laboratorium->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminLaboratorium');
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
        $laboratorium = laboratorium::find($id);
        return view('AdminLaboratorium.ubah', ['laboratorium' => $laboratorium]);
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
            'namalab'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $laboratorium = laboratorium::find($id);
            $laboratorium->id = $request->id;
            $laboratorium->namalab = $request->namalab;
            $laboratorium->deskripsi = $request->deskripsi;
            $gambar = $request->NamaGambar;
            $gambar1 = $request->NamaGambar1;

            $laboratorium->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminLaboratorium');

        } else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
                'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',

            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Lab'), $NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1 = time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Lab'), $NamaGambar1);

            $id = $request->id;
            $namalab = $request->namalab;
            $deskripsi = $request->deskripsi;

            $laboratorium = laboratorium::find($id);
            $laboratorium->namalab = $request->namalab;
            $laboratorium->deskripsi = $request->deskripsi;

            $laboratorium->gambar = $NamaGambar;
            $laboratorium->gambar1 = $NamaGambar;

            $laboratorium->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminLaboratorium');

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
        $laboratorium = laboratorium::find($id);
        $laboratorium->delete();

        return back();
    }
}
