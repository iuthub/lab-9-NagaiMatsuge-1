<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function post()
    {
        return $this->belognsTo('App\Post', 'post_id');
    }
}
