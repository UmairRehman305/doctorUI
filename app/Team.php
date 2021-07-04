<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'price', 
        'detail', 
        'status'
    ];
}
