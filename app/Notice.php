<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public $timestamps = false;

    protected $fillable=['id','userId','title','content','date','userName','count'];
}
