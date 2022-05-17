<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hiburan extends Model
{
    use HasFactory;
    protected $table = 'ho';
    protected $fillable = ['id','judul','deskripsi','gambar'];
    protected $primaryKey = 'id';
}
