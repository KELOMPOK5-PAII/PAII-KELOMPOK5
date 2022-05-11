<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saran extends Model
{
    use HasFactory;
    protected $table = 'saran';
    protected $fillable = ['id','nama','saran'];
    protected $primaryKey = 'id';
}
