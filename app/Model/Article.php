<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cyrildewit\PageVisitsCounter\Traits\HasPageVisitsCounter;

class Article extends Model
{
    use HasPageVisitsCounter;
    
}
