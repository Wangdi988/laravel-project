<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    protected $table = 'dislikes';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;
}
