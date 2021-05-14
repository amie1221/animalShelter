<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rescuer extends Model
{
    // use HasFactory;
   protected $guarded = ['id'];
   public $timestamps = false;

   public function animal()
	{
	return $this->hasMany(Animal::class);
	}
}
