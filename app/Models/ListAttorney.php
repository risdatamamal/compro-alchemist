<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListAttorney extends Model
{
    use HasFactory;

    protected $table = 'list_attorneys';

    protected $fillable = [
        'name',
        'position',
        'desc',
        'image_url'
    ];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
