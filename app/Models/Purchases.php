<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Purchases extends Model
{
  protected $guarded = array();
  public $timestamps = false;

  public function user() {
    return $this->belongsTo('App\Models\User')->first();
  }

  public function images(){
    return $this->belongsTo('App\Models\Images')->first();
  }

}
