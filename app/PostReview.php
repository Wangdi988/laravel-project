<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostReview extends Model
{
    //Table Name 
    protected $table = 'post_reviews';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }

    // public function like() {
    //     return $this->hasMany('App\like');
    // }
}
