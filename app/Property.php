<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties_tb';
    protected $fillable = ['name','type'];
}
