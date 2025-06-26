<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'news_category_id',
        'thumbnail',
        'content',
        'is_public'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function news_category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
