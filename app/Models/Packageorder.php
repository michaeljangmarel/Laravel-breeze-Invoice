<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packageorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id' ,
        'name' ,
        'email' ,
        'number'
    ];
}
