<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use HasFactory;
    use interactsWithMedia;

    protected $fillable = [
        'name',
        'job_title',
        'description'
    ];


//getavarat
    public function getAvatarAttribute()
    {
        return $this->getFirstMediaUrl('testimonial');
    }
}
