<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
   protected $guarded = ['id'];
   public $timestamps = false;

   	public function animal()
	{
	return $this->belongstoMany(Animal::class);
	}
}
