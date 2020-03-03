<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    // Diese Felder sollen beim News-Model beschreibbar sein
    protected $fillable = [
        'user_id', 'titel', 'text',
    ];

    // Hier legen wir die Relationship zwischen Category und News fest. Eine News kann mehrere Kategorien haben.
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
