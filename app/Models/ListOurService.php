<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOurService extends Model
{
    use HasFactory;

    protected $table = 'list_our_services';

    protected $fillable = [
        'title',
        'desc',
        'our_service_id'
    ];

    protected $with = ['OurService'];

    public function OurService()
    {
        return $this->belongsTo('App\Models\OurService');
    }

    protected $dates = ['created_at'];

    protected $casts = [
        'created_at' => 'datetime:l, d F Y',
        'updated_at' => 'datetime:l, d F Y'
    ];
}
