<?php namespace App\Models;

class Province extends Model {

	protected $table = 'provinces';
	public $timestamps = true;

	public function cities()
	{
		return $this->hasMany('City');
	}
}