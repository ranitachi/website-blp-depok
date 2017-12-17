<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    //
    use SoftDeletes;
    protected $table = 'slider';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','picture','desc','flag','created_at','updated_at'];
}
