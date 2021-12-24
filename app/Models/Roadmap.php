<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roadmap extends Model
{
    use SoftDeletes;

    protected $fillable =
    [
        'title_roadmap', 'slug','detail_roadmap','number'
    ];

    protected $hidden =
    [

    ];

    use HasFactory;
}
