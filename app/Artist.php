<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'luogo_di_nascita', 'luogo_di_morte', 'opere', 'image'
    ];
}
