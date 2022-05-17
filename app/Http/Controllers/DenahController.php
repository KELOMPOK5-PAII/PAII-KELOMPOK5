<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\denah;

class DenahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denah = denah::all();
        return view('Denah.denah',['denah' => $denah]);

    }


    public function tampil(Request $request)
    {
        if($request->has('cari')) {
            $data = denah::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('penjelasan', 'LIKE', '%'.$request->cari.'%')


            ->paginate(5);
        } else {
            $data = denah::paginate(5);
        }
        return view('AdminDenah.index', ['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDenah.tambah');
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
            'kode'=>'required',
            'penjelasan'=>'required',
        ]);

            denah::create([
                'kode'=>$request->kode,
                'penjelasan'=>$request->penjelasan,
            ]);

        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminDenah');
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
        $denah = denah::find($id);
        return view('AdminDenah.ubah', ['denah' => $denah]);
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
            'kode'=>'required',
            'penjelasan'=>'required',
        ]);

            $denah = denah::find($id);
            $denah->id = $request->id;
            $denah->kode = $request->kode;
            $denah->penjelasan = $request->penjelasan;

            $denah->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminDenah');


        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminDenah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $denah = denah::find($id);
        $denah->delete();

        return back();
    }

}
