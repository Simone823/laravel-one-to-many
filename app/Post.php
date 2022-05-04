<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'publication_date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
