<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = 'facilities';
    protected $fillable = ['id','facility_name','img','desc'];

    public function getAvatar(){
        if(!$this->img){
            return asset('adminlte/img/default.jpg');
        }
        return asset('img/',$this->img);
    }

    public function homestay(){
        return $this->belongsTo(Homestay::class);
    }
}
