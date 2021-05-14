<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Animal extends Model
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

	public function adoptline()
	{
	return $this->hasMany(Adoptline::class);
	}

}
