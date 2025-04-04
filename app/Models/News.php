<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;



class News extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'news';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'summary',
        'image_url',
        'video_url',
        'category',
        'source_name',
        'source_url',
        'published_at',
        'views',
        'status',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
