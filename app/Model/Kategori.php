<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'cat_berita';
    protected $fillable = ['nama_kategori', 'desc', 'id_divisi', 'created_at', 'updated_at'];

}
