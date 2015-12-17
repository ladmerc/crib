<?php

use LaravelBook\Ardent\Ardent;

class Clique extends Eloquent {

	protected $table = 'cliques';

	public $fillable = ['name'];

	/**
	 * User relationship
 	*/
	public function users(){
	  return $this->belongsToMany('User');
	}

	public static $factory = array(
  		'name' => 'string'
	);

	/**
	 * Post relationship
	*/
	public function posts()
	{
	  return $this->hasMany('Post');
	}

	public static $rules = array(
		'name' => 'required|between:2,10'
	);

}