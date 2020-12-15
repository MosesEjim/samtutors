<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function tutor(){
        return $this->belongsTo('App\Models\Tutor');
    }

    public function snippet(){
        return substr($this->body, 0, 30);
    }
}
