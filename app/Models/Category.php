<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image'
    ];

    protected $dates = [
        'created_at',
        'updated_ad'
        'deleted_at'
    ];

    public products()
    {
        return $this->hasMany(Products::class);
    }
}
