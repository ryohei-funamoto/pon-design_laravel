<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorksCategory extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
