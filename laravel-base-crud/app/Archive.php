<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'series',
    ];
}
