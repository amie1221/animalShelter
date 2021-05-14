<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
   protected $guarded = ['id'];
   public $timestamps = false;


   	public function adoptline()
	{
	return $this->hasMany(Adoptline::class);
    }
}

