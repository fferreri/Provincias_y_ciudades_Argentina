<?php namespace App\Models;

class City extends Model {

	protected $table = 'cities';
	public $timestamps = true;

	public function province()
	{
		return $this->belongsTo('Province');
	}

}