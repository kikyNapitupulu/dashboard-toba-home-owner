<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = "profil";
    protected $fillable = ['front_name','last_name','gender','email','address','phone','avatar','role'];

    public function homestay(){
        return $this->hasMany(Homestay::class);
    }

    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
