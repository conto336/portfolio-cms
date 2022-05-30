<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'slug',
        'url',
        'customer',
        'description',
        'cover_1',
        'cover_2',
        'cover_3',
    ];
}
