<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahtamu extends Model
{
    use HasFactory;
    protected $table = 'rumahtamu';
    protected $fillable = ['id','judul','deskripsi','gambar'];
    protected $primaryKey = 'id';
}


