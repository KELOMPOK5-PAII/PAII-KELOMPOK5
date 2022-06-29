<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\saran;
use App\Models\fasilitas;
use App\Models\perkembangan;
use DB;

class DashboardController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fasilitas = fasilitas::count();
        $saran = saran::where('verify', 1)->count();
        $reqsaran = saran::where('verify', 0)->count();
        $perkembangan = perkembangan::count();

        return view('dashboard', compact('fasilitas', 'saran', 'perkembangan', 'reqsaran'));
    }


}
