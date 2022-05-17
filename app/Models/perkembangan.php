<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perkembangan extends Model
{
    use HasFactory;
    protected $table = 'perkembangan';
    protected $fillable = ['id','perkembangan','deskripsi','status'];
    protected $primaryKey = 'id';

}
