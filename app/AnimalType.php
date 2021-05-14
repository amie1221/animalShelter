<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
     public function animal()
	{
	return $this->hasMany(Animal::class,'animal_type_id');
	}
}
