<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = ['order_date','total'];

    public function profil(){
        return $this->belongsTo(Profil::class);
    }
}
