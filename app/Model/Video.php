<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Video extends Model
{
    //
    use SoftDeletes;
    protected $table = 'video';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','url','flag','created_at','updated_at'];
}
