<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Regulasi extends Model
{
    use SoftDeletes;

    protected $table = 'regulasi';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_regulasi', 'desc', 'file','view','flag_active', 'created_at', 'updated_at'];

}
