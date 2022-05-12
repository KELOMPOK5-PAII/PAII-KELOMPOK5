<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit;

class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audit = audit::all();
        return view('Auditorium.Auditorium',['audit' => $audit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $judul = audit::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = audit::paginate(5);
        }
        return view('AdminAudiotorium.index', ['data'=>$data]);
    }

    public function create()
    {
        return view('AdminAudiotorium.tambah');
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
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')==NULL) {
            audit::create([
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
                'gambar' =>$request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Auditorium'),$NamaGambar);

            $audit = new audit();
            $audit->judul = $judul;
            $audit->deskripsi = $deskripsi;
            $audit->gambar = $gambar;
            $audit->save();
        }
        alert()->success('Success','Data Berhasil Ditambahkan!');
        return redirect('/AdminAuditorium');
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
        $audit = audit::find($id);
        return view('AdminAudiotorium.ubah', ['audit' => $audit]);
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
            $audit = audit::find($id);
            $audit->id = $request->id;
            $audit->judul = $request->judul;
            $audit->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $audit->save();
            alert()->success('Success','Data Berhasil Diubah!');
            return redirect('/AdminAudiotorium');

        } else {
            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('Gambar/Auditorium'), $NamaGambar);

            $id = $request->id;
            $judul = $request->judul;
            $deskripsi = $request->deskripsi;

            $audit = audit::find($id);
            $audit->judul = $request->judul;
            $audit->deskripsi = $request->deskripsi;

            $audit->gambar = $NamaGambar;

            $audit->save();

        }
        alert()->success('Success','Data Berhasil Diubah!');
        return redirect('/AdminAudiotorium');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $audit = audit::find($id);
        $audit->delete();

        return back();
    }
}
