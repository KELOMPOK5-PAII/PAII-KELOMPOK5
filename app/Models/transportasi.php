<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transportasi extends Model
{
    use HasFactory;
    protected $table = 'transportasi';
    protected $fillable = ['id','judul','deskripsi','gambar'];
    protected $primaryKey = 'id';
}
