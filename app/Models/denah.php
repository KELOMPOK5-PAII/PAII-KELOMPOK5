<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denah extends Model
{
    use HasFactory;
    protected $table = 'denah';
    protected $fillable = ['id', 'kode','penjelasan'];
    protected $primaryKey = 'id';
}
