<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'picture',
        'catecory_id',
    ];
}

