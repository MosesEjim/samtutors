<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function snippet(){
        return substr($this->body, 0, 60);
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
