<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelType extends Model
{
   
    public function personnel()
{
	
	return $this->hasMany(Personnel::class);
}

}
