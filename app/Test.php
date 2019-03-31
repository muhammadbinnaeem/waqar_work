<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    protected $table = 'test';

    // The attributes that are mass assignable
    protected $fillable = ['name', 'email'];


    protected $hidden = ['id', 'deleted_at'];
}
