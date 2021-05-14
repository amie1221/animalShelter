<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptLine extends Model
{
   	protected $guarded = ['id'];
	public $timestamps = false;

    public function rescuer()
    {
    return $this->belongsTo(Rescuer::class,'id');
    }
	public function personnel()
	{
	return $this->belongsto(Personnel::class,'id');
	}
	public function animaltype()
	{
	return $this->belongsto(AnimalType::class,'animal_type_id');
	}
	public function disease()
	{
	return $this->belongstoMany(Disease::class);
	}
	public function animal()
	{
	return $this->belongsTo(Animal::class);
	}
	  public function adopter()
    {
    return $this->belongsTo(Adopter::class);
    }
}

