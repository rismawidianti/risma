<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
     protected $table = 'authors';
     protected $fillable =['nama'];
     protected $visible  =['nama'];

  public function book()
 {
  return $this->hasMany('App\book','author_id');
 }
}
