<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticingArea extends Model
{
    use HasFactory;

    protected $table = 'practicing_areas';

    protected $fillable = [
        'title',
        'desc'
    ];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
