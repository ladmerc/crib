<?php

use League\FactoryMuffin\Facade as FactoryMuffin;

FactoryMuffin::define('Clique', array(
  'name' => 'ghjhbn',
    'user_id' => 'factory|User',
)); 

FactoryMuffin::define('Post', array(
	'body' => 'dummy body',
  'user_id' => 'factory|User',
  'clique_id' => 'factory|Clique'
));
 
FactoryMuffin::define('User', array(
  'username' => 'firstName',
  // 'profile_pic' => 'optional:imageUrl|400;400',
  'email' => 'test@test.com',
  'password' => '123456789',
  'password_confirmation' => '123456789'
));

