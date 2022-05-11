<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kantin extends Model
{
    use HasFactory;
    protected $table = 'kantin';
    protected $fillable = ['id', 'namakantin','jammakan','perlengkapan','peraturan','deskripsi','gambar','gambar1'];
    protected $primaryKey = 'id';
}
