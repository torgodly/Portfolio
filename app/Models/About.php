<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'slogan',
        'title',
        'description',
        'email',
        'phone_number',
        'address',];


    public function getHeroImageAttribute()
    {
        return $this->getFirstMediaUrl('hero');
    }

    //about image
    public function getAboutImageAttribute()
    {
        return $this->getFirstMediaUrl('about');
    }
}
