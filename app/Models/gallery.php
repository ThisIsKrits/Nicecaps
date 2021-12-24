<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gallery extends Model
{
    use SoftDeletes;

    protected $fillable =
    [
        'title_image','image'
    ];

    protected $hidden = [

    ];

    use HasFactory;
}
