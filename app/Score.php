<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'score';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function card()
    {
        return $this->belongsTo('App\Card');
    }
}
