<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    public $timestamps = false;

    protected $fillable=['id','userId','title','content','image','date','userName','count'];
}
