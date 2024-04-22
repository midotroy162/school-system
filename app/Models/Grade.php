<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model 
{
    protected $fillable = ['Name', 'Notes'];
    protected $table = 'Grades';
    public $timestamps = true;

}