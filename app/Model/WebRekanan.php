<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebRekanan extends Model
{
    use SoftDeletes;
    public $table = 'web_rekanan';
}
