<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    use HasFactory;
    protected $table = 'perpus';
    protected $fillable = ['id','judul','deskripsi','gambar','penjelasangambar'];
    protected $primaryKey = 'id';
}
