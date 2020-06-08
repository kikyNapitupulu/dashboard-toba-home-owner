<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hootlex\Moderation\Moderatable;

class Review extends Model
{
    use Moderatable;
    protected $table = 'review';
    protected $fillable = ['id','name','review','rating','homestay','room','time_publish','status','moderated_at'];
}
