<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Berita extends Model
{
    use SoftDeletes;

    protected $table = 'berita';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'desc', 'file','view','flag','id_kategori','id_user', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsTo('\App\Model\Kategori', 'id_kategori');
    }
}
