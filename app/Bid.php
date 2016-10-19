<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //protected $table = 'bids';
    protected $fillable = [
        'title','alias','description',
        'category','city','region',
        'condition','price','room_number',
        'bath_places','sleep_places','keywords',
        'others'
    ];
}
