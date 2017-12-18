<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Kontak extends Model
{
    //
     use SoftDeletes;
    protected $table = 'contact';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','alamat','telepon','email','maps','facebook','twitter','instagram','created_at','updated_at'];

}
