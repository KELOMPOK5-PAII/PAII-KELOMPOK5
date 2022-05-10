<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahdosen extends Model
{
    use HasFactory;
    protected $table = 'rumahdosen';
    protected $fillable = ['id','namarumahdosen','deskripsi','gambar'];
    protected $primaryKey = 'id';
}
