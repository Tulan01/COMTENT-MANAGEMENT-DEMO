<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content_manage extends Model
{
   protected $fillable = [
        'type', 'section', 'title','image','url','details','status','fullurl'
    ];
}
