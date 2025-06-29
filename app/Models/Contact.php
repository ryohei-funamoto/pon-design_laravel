<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
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
