<?php

namespace App\Models;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory, Resizable;

    protected $fillable = [
        'title',
        'content',
        'image',
        'ios_link',
        'android_link'
    ];
}
