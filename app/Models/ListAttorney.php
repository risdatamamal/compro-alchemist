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
        'image_url',
        'attorney_id'
    ];

    protected $with = ['attorneys'];

    public function attorneys()
    {
        return $this->belongsTo('App\Models\Attorneys');
    }

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
