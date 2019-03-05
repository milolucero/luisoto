<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuentes extends Model {
    
    protected $fillable = [
        'id', 'id_user', 'name', 'created_at',
    ];
}
