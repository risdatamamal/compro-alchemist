<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPublication extends Model
{
    use HasFactory;

    protected $table = 'list_publications';

    protected $fillable = [
        'title',
        'desc',
        'category',
        'image_url',
        'video_url',
        'slug',
        'publication_id'
    ];

    protected $with = ['publication'];

    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
