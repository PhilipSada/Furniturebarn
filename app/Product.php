<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'image_url', 'category_id'];


  public function category(){
      $this->belongsTo('App\Category');
  }
}
