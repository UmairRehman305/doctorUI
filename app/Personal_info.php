<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_Info extends Model
{
    protected $table = 'prsonal_info';
    protected $primaryKey = 'userID';
    public $timestamps = true;
}
