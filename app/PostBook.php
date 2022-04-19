<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Input;

class PostBook extends Model
{
    //Table Name 
    protected $table = 'post_books';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
