<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $table = 'homestay';
    protected $fillable = ['id','header_image','name','contact','email','address','rating','total_room','description','img1','img2','img3','img4','img5','img6','status','price'];
    public function getAvatar(){
        if((!$this->header_image)|(!$this->img1)|(!$this->img2)|(!$this->img3)|(!$this->img4)|(!$this->img5)|(!$this->img6)){
            return asset('adminlte/img/default.jpg');
        }
        return asset('img/',$this->header_image);
        return asset('img/',$this->img1);
        return asset('img/',$this->img2);
        return asset('img/',$this->img3);
        return asset('img/',$this->img4);
        return asset('img/',$this->img5);
        return asset('img/',$this->img6);
    }

    public function getId(){
        return 'id';
    }

    public function room(){
        return $this->hasMany(Tipe_Room::class);
    }

    public function facilities(){
        return $this->hasMany(Facilities::class);
    }

    public function profil(){
        return $this->belongsTo(Homestay::class);
    }
}
