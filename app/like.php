<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $table = 'likes';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    // public function postreviews() {
    //     return $this->belongsTo('App\PostReview');
    // }
}
