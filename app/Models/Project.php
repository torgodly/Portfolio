<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'date',
        'link',
        'github',
        'main_tool',

    ];

    //skills
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    //tools
    public function tool()
    {
        return $this->belongsTo(Skill::class, 'main_tool');
    }
}
