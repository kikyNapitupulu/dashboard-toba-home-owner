<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_Room extends Model
{
    protected $table = 'room';
    protected $fillable = ['room_type','capacity','room_size', 'bed_type','price','desc','img'];

    public function homestay(){
        return $this->belongsTo(Homestay::class);
    }
}
