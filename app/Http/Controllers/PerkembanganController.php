<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perkembangan;

class PerkembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $perkembangan = perkembangan::all();
            return view('Perkembangan.perkembangan',['perkembangan' => $perkembangan]);
        }


        public function tampil(Request $request)
        {
            if($request->has('cari')) {
                $data = perkembangan::where('id', 'LIKE', '%'.$request->cari.'%')
                ->orWhere('perkembangan', 'LIKE', '%'.$request->cari.'%')


                ->paginate(5);
            } else {
                $data = perkembangan::paginate(5);
            }
            return view('AdminPerkembangan.index', ['data'=>$data]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPerkembangan.tambah');
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
            'perkembangan'=>'required',
            'deskripsi'=>'required',
            'status'=>'required',
        ]);


            perkembangan::create([
                'perkembangan'=>$request->perkembangan,
                'deskripsi'=>$request->deskripsi,
                'status' =>$request->status
            ]);

        alert()->success('Sukses','Data Berhasil Ditambahkan!');
        return redirect('/AdminPerkembangan');
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
        $perkembangan = perkembangan::find($id);
        return view('AdminPerkembangan.ubah', ['perkembangan' => $perkembangan]);
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
            'perkembangan'=>'required',
            'deskripsi'=>'required',
            'status'=>'required',
        ]);


            $perkembangan = perkembangan::find($id);
            $perkembangan->id = $request->id;
            $perkembangan->perkembangan = $request->perkembangan;
            $perkembangan->deskripsi = $request->deskripsi;
            $perkembangan->status = $request->status;

            $perkembangan->save();
            alert()->success('Sukses','Data Berhasil Diubah!');
            return redirect('/AdminPerkembangan');


        alert()->success('Sukses','Data Berhasil Diubah!');
        return redirect('/AdminPerkembangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perkembangan = perkembangan::find($id);
        $perkembangan->delete();

        return back();
    }

    public function completed(perkembangan $perkembangan)
    {
        if($perkembangan->completed == false)
        {
            $perkembangan->completed = true;
            $perkembangan->update([
                'completed' => $perkembangan->completed
                ]);
                 return redirect()->back();
        }
        else
        {
            $perkembangan->completed=false;
            $perkembangan->update([
                'completed' => $perkembangan->completed
                ]);
                return redirect()->back();
        }
    }

}
