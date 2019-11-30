<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public $timestamps = false;

    protected $fillable=['id','userId','title','content','date','userName','count'];
}
