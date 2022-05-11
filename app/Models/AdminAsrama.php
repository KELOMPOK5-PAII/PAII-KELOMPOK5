<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAsrama extends Model
{
    use HasFactory;
    protected $table = 'asrama';

    protected $fillable = ['id', 'namaasrama', 'gambar', 'lokasi', 'jenisasrama', 'fasilitas', 'gambar1', 'deskripsi'];

    protected $primaryKey = 'id';
}
