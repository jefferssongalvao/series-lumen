<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamp = false;
    protected $fillable = ['name'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}