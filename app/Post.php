<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
