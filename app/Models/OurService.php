<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;

    protected $table = 'our_services';

    protected $fillable = [
        'title',
        'desc',
        'image_url'
    ];

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
