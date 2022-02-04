<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    function pictures()
    {
        return $this->belongsToMany(Picture::class)->withPivot("gallery_id", "picture_id");
    }
}
