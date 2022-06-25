<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruangterbuka;

class RuangTerbukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangterbuka = ruangterbuka::all();
        return view('RuangTerbuka.ruangterbuka',['ruangterbuka' => $ruangterbuka]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = ruangterbuka::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('namart', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = ruangterbuka::paginate(5);
        }
        return view('AdminRuangTerbuka.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('AdminRuangTerbuka.tambah');
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
            'namart'=>'required',
            'deskripsi'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        if ($request->file('gambar')==NULL) {
            ruangterbuka::create([
                'namart'=>$request->namart,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar,
                'gambar1' =>$request->gambar1
            ]);
        } else {
            $namart = $request->namart;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Ruangan Terbuka'),$NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1= time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Ruangan Terbuka'),$NamaGambar1);

            $ruangterbuka = new ruangterbuka();
            $ruangterbuka->namart = $namart;
            $ruangterbuka->deskripsi = $deskripsi;
            $ruangterbuka->gambar = $NamaGambar;
            $ruangterbuka->gambar1 = $NamaGambar1;
            $ruangterbuka->save();
        }
        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminRuangTerbuka');
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
        $ruangterbuka = ruangterbuka::find($id);
        return view('AdminRuangTerbuka.ubah', ['ruangterbuka' => $ruangterbuka]);
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
            'namart'=>'required',
            'deskripsi'=>'required',
        ]);

        if ($request->file('gambar')==NULL) {
            $ruangterbuka = ruangterbuka::find($id);
            $ruangterbuka->id = $request->id;
            $ruangterbuka->namart = $request->namart;
            $ruangterbuka->deskripsi = $request->deskripsi;
            $gambar = $request->$NamaGambar;
            $gambar1 = $request->$NamaGambar1;


            $ruangterbuka->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminRuangTerbuka');

        }

        else {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
                'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',

            ]);

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Ruangan Terbuka'), $NamaGambar);

            $gambar1 = $request->file('gambar1');
            $NamaGambar1 = time().'.'.$gambar1->extension();
            $gambar1->move(public_path('Gambar/Ruangan Terbuka'), $NamaGambar1);

            $id = $request->id;
            $namart = $request->namart;
            $deskripsi = $request->deskripsi;

            $ruangterbuka = ruangterbuka::find($id);
            $ruangterbuka->namart = $request->namart;
            $ruangterbuka->deskripsi = $request->deskripsi;

            $ruangterbuka->gambar = $NamaGambar;
            $ruangterbuka->gambar1 = $NamaGambar1;

            $ruangterbuka->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminRuangTerbuka');

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
        $ruangterbuka = ruangterbuka::find($id);
        $ruangterbuka->delete();

        return back();
    }
}
