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

}
