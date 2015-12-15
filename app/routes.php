<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/user', function()
{
  $user = new User;
  $user->username = 'rrteredsfjnjdff';
  $user->email = 'wrwrmsdeesde@doemain.com';
  $user->password = 'deadgiveaway';
  $user->password_confirmation = 'deadgiveaway';
  if($user->save()) {echo "saved";}
  else{echo"failed";};

});

Route::get('/test', function() {
	// Create a new Post
$post = new Post(array('body' => 'My fifth comment'));
// Grab User 1
$user = User::find(1);
// // Save the Post
$user->posts()->save($post);
var_dump($user->posts()->find(3));
});

// get('/user', function()
// {
//   $user = new User;
//   $user->username = 'merc';
//   $user->email = 'name@domain.com';
//   $user->password = 'deadgiveaway';
//   $user->password_confirmation = 'deadgiveaway';
//   var_dump($user->save());
// });

// $router->get('/user', function()
// {
//   $user = new User;
//   $user->username = 'ladmerc';
//   $user->email = 'name@domain.com';
//   $user->password = 'deadeaway';
//   $user->password_confirmation = 'deadgiveaway';
//   var_dump($user->save());
// });