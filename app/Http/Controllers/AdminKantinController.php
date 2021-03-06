<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminKantin;
use Alert;


class AdminKantinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('cari')) {
            $data = AdminKantin::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namakantin', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = AdminKantin::paginate(5);
        }
        return view('AdminKantin.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminKantin.tambah');
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
            'namakantin'=>'required',
            'jammakan'=>'required',
            'perlengkapan'=>'required',
            'peraturan'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            // 'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('gambar')==NULL) {
            AdminKantin::create([
                'namakantin'=>$request->namakantin,
                'jammakan'=>$request->jammakan,
                'perlengkapan'=>$request->perlengkapan,
                'peraturan'=>$request->peraturan,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar,
                // 'gambar1' =>$request->gambar1
            ]);
        } else {
            $namakantin = $request->namakantin;
            $jammakan = $request->jammakan;
            $perlengkapan = $request->perlengkapan;
            $peraturan = $request->peraturan;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Kantin'),$NamaGambar);

            // $gambar1 = $request->file('gambar1');
            // $NamaGambar1 = time().'.'.$gambar1->extension();
            // $gambar1->move(public_path('Gambar/Kantin'),$NamaGambar1);

            $AdminKantin = new AdminKantin();
            $AdminKantin->namakantin = $namakantin;
            $AdminKantin->jammakan = $jammakan;
            $AdminKantin->perlengkapan = $perlengkapan;
            $AdminKantin->peraturan = $peraturan;
            $AdminKantin->deskripsi = $deskripsi;
            $AdminKantin->gambar = $NamaGambar;
            // $AdminKantin->gambar1 = $NamaGambar1;
            $AdminKantin->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminKantin');
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
        $AdminKantin = AdminKantin::find($id);
        return view('AdminKantin.ubah', ['AdminKantin' => $AdminKantin]);
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
            'namakantin'=>'required',
            'jammakan'=>'required',
            'perlengkapan'=>'required',
            'peraturan'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $AdminKantin = AdminKantin::find($id);
            $AdminKantin->id = $request->id;
            $AdminKantin->namakantin = $request->namakantin;
            $AdminKantin->jammakan = $request->jammakan;
            $AdminKantin->perlengkapan = $request->perlengkapan;
            $AdminKantin->peraturan = $request->peraturan;
            $AdminKantin->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;
            // $AdminKantin->gambar1 = $NamaGambar1;


            $AdminKantin->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminKantin');

        }
        else {

            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
                // 'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',

            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Kantin'), $NamaGambar);

            // $gambar1 = $request->file('gambar1');
            // $NamaGambar1 = time().'.'.$gambar1->extension();
            // $gambar1->move(public_path('Gambar/Kantin'), $NamaGambar1);

            $id = $request->id;
            $namakantin = $request->namakantin;
            $jammakan = $request->jammakan;
            $perlengkapan = $request->perlengkapan;
            $peraturan = $request->peraturan;
            $deskripsi = $request->deskripsi;

            $AdminKantin = AdminKantin::find($id);
            $AdminKantin->namakantin = $request->namakantin;
            $AdminKantin->jammakan = $request->jammakan;
            $AdminKantin->perlengkapan = $request->perlengkapan;
            $AdminKantin->peraturan = $request->peraturan;
            $AdminKantin->deskripsi = $request->deskripsi;

            $AdminKantin->gambar = $NamaGambar;
            // $AdminKantin->gambar1 = $NamaGambar1;

            $AdminKantin->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminKantin');
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
        $AdminKantin = AdminKantin::find($id);
        $AdminKantin->delete();

        return back();
    }


}
