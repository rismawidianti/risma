<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
     protected $table = 'books';
     protected $fillable =['title','author','amount','cover'];
     protected $visible  =['title','author','amount','cover'];

      public function author()
 {
  return $this->belongsTo('App\author','author_id');
 }
}