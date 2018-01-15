<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    //
    use SoftDeletes;
    protected $table = 'users';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name','email','password','level','remember_token','nip','created_at','updated_at'];
}
