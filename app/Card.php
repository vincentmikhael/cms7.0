<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $timestamps = false;
    protected $table = 'card';

    protected $fillable = ['lat', 'lng', 'cardName', 'status', 'level_id', 'display_image', 'url_image'];

    public function level()
    {
        return $this->belongsTo('App\Level');
    }
}
