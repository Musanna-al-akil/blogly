<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table='sliderhome';
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
