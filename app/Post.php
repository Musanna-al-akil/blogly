<?php

namespace App;

use App\User;
use App\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
     use Searchable;
     
    protected $table='posts';
      public function user(){
        return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
   
    public function tags(){
        return $this->belongsTo('App\Tag');
    }
    public function sh(){
        return $this->hasMany('App\HomeSlider');
    }
}
