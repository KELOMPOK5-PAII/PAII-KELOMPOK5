<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit extends Model
{
    use HasFactory;
    protected $table = 'audit';
    protected $fillable = ['id','judul','deskripsi','gambar'];
    protected $primaryKey = 'id';
}

