<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BusinessCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'position',
        'phone_number',
        'email',
    ];

    public static function down()
    {
        //
    }
}
