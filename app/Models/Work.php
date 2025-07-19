<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'works_category_id',
        'thumbnail',
        'content',
        'is_public',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function works_category()
    {
        return $this->belongsTo(WorksCategory::class, 'works_category_id', 'id');
    }
}
