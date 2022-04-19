<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asrama extends Model
{
    use HasFactory;
    protected $table = 'asrama';
    protected $fillable = ['id', 'namaasrama','lokasi','deskripsi','jenisasrama','fasilitas','gambar', 'foto'];
    protected $primaryKey = 'id';
}
