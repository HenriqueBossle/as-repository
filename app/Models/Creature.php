<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creature extends Model
{
    protected $fillable = [
        'name',
        'species',
        'age',
        'habitat',
        'image',
     ];
}
