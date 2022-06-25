<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\gedung;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung = gedung::all();
        return view('Gedung.gedung',['gedung' => $gedung]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = gedung::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namagedung', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = gedung::paginate(5);
        }
        return view('AdminGedung.index', ['data'=>$data]);
    }


    public function create()
    {
        return view('AdminGedung.tambah');
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
            'namagedung'=>'required',
            'deskripsi'=>'required',
            'jamoperasional' =>'required',
            'aturan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('gambar')==NULL) {
            gedung::create([
                'namagedung'=>$request->namagedung,
                'deskripsi'=>$request->deskripsi,
                'jamoperasional' =>$request->jamoperasional,
                'aturan' => $request->aturan,
                'gambar' =>$request->gambar,
                'gambar1' =>$request->gambar1
            ]);
        } else {
            $namagedung = $request->namagedung;
            $deskripsi = $request->deskripsi;
            $jamoperasional = $request->jamoperasional;
            $aturan = $request->aturan;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Gedung'),$NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1= time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Gedung'),$NamaGambar1);

            $gedung = new gedung();
            $gedung->namagedung = $namagedung;
            $gedung->deskripsi = $deskripsi;
            $gedung->jamoperasional = $jamoperasional;
            $gedung->aturan = $aturan;
            $gedung->gambar = $NamaGambar;
            $gedung->gambar1 = $NamaGambar1;
            $gedung->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminGedung');
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
        $gedung = gedung::find($id);
        return view('AdminGedung.ubah', ['gedung' => $gedung]);
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
            'namagedung'=>'required',
            'deskripsi'=>'required',
            'jamoperasional' =>'required',
            'aturan' => 'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $gedung = gedung::find($id);
            $gedung->id = $request->id;
            $gedung->namagedung = $request->namagedung;
            $gedung->deskripsi = $request->deskripsi;
            $gedung->jamoperasional = $request->jamoperasional;
            $gedung->aturan = $request->aturan;
            $gedung->gambar = $NamaGambar;
            $gedung->gambar1 = $NamaGambar1;

            $gedung->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminGedung');

        }

        else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
                'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',

            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Gedung'), $NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1 = time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Gedung'), $NamaGambar1);

            $id = $request->id;
            $namagedung = $request->namagedung;
            $deskripsi = $request->deskripsi;
            $jamoperasional = $request->jamoperasional;
            $aturan = $request->aturan;

            $gedung = gedung::find($id);
            $gedung->namagedung = $request->namagedung;
            $gedung->deskripsi = $request->deskripsi;
            $gedung->jamoperasional = $request->jamoperasional;
            $gedung->aturan = $request->aturan;

            $gedung->gambar = $NamaGambar;
            $gedung->gambar1 = $NamaGambar1;

            $gedung->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminGedung');
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
        $gedung = gedung::find($id);
        $gedung->delete();

        return back();
    }
}
