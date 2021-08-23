<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_info extends Model
{
    // use HasFactory;
    protected $table = 'course_info';
    protected $primaryKey = 'formID';
    public $timestamps = true;
}
