<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data = array('title' => 'User Profil');
        return view('profil', $data);
    }
}

