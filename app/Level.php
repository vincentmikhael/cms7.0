<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $timestamps = false;
    protected $table = 'gamelevel';

    protected $fillable = [
        'level',
        'score_range',
    ];
}
