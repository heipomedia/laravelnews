<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Hier legen wir fest, dass die einzelnen Kategorien in der Tabelle "categories" gespeichert wird
    protected $table = 'categories';
    // Nur das Feld "name" soll mit Daten beschrieben werden können
    protected $fillable = ['name'];

    // Hiermit legen wir die Relationship zwischen Category und News fest. Eine Kategorie gehört zu mehreren News.
    public function news()
    {
        return $this->belongsToMany('App\News');
    }
}
