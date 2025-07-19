<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'type',
        'name',
        'company',
        'email',
        'tel',
        'comment',
        'job'
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
