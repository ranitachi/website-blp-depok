<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Profil extends Model
{
    //
    use SoftDeletes;
    protected $table = 'profile';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','desc','category','flag','view','created_at','updated_at'];

}
