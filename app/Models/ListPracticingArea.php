<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPracticingArea extends Model
{
    use HasFactory;

    protected $table = 'list_practicing_areas';

    protected $fillable = [
        'title',
        'desc',
        'image_url',
        'practicing_area_id'
    ];

    protected $with = ['practicingArea'];

    public function practicingArea()
    {
        return $this->belongsTo('App\Models\PracticingArea');
    }

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
