<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListExperience extends Model
{
    use HasFactory;

    protected $table = 'list_experiences';

    protected $fillable = [
        'name',
        'desc',
        'image_url',
        'experience_id'
    ];

    protected $with = ['experience'];

    public function experience()
    {
        return $this->belongsTo('App\Models\Experience');
    }

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
