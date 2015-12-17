<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
// use LaravelBook\Ardent\Ardent;

class Post extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	public static $rules = array(
		'clique_id' => 'required|numeric'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = array('body');

	public function user()
	{
		return $this->belongsTo('User');
	}

	/**
	 * Post relationship
	*/
	public function clique()
	{
	  return $this->belongsTo('Clique');
	}

	public function comments()
	{
		return $this->morphMany('Comment', 'commentable');
	}

}
