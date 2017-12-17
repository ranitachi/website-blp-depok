<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Foto extends Model
{
    //
    use SoftDeletes;
    protected $table = 'gallery';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','picture','category','desc','flag','created_at','updated_at'];

}
