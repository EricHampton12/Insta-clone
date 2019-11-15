<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower_Followee extends Model
{
    public function follower()
    {
        return $this->belongsTo('App\User');
    }
    
    public function followee()
    {
        return $this->belongsTo('App\User');
    }
}
