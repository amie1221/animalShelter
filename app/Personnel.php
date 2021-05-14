<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model

{
   protected $guarded=['id'];

    public function personnel_types()
    {
	return $this->belongsto(PersonnelType::class,'id');
	}

	public function animal()
	{
	return $this->hasMany(Animal::class);
	}

}
