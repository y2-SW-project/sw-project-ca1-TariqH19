<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Models\User' , 'user_role');
    }

    use HasFactory;
}
