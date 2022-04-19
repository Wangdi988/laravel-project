<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //table
    protected $table = 'categories';

     //Primary Key
     public $primaryKey = 'id';

     //Timestamps
     public $timestamps = true;

     public function postbooks()
     {
         return $this->hasMany('App\PostBook');
     }
}
