<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whys extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading','content','image',
    ];
}