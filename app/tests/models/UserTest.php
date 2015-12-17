<?php

class UserTest extends TestCase
{

	public static function setupBeforeClass()
	{
	  echo "\n Loading FactoryMuffin.....";
	  \League\FactoryMuffin\Facade::loadFactories(__DIR__ . '/factories');
	}

	public static function tearDownAfterClass()
	{
	  \League\FactoryMuffin\Facade::deleteSaved();
	  echo "\n Cleaning Up........";
	}

	public function testCreateNewPost()
	{
	  $post = \League\FactoryMuffin\Facade::create('Post');
	  $clique = \League\FactoryMuffin\Facade::create('Clique');
	  $post->clique_id = $clique->id;
	  $this->assertInstanceOf('Post', $post);
	  $this->assertInstanceOf('User', $post->user);
	}

	// public function testNewClique()
	// {
	// 	$clique = \League\FactoryMuffin\Facade::create('Clique');
	// 	$this->assertInstanceOf('Clique', $clique);
	// 	$this->assertEquals($clique->name, 'groupone');
	// 	$this->assertFalse($clique->save());
	// }
	/**
	 * Username is required
	 */
	// public function testUsernameIsRequired()
	// {
	//   // Create a new User
	//   $user = new User;
	//   $user->email = "name@domain.com";
	//   $user->password = "password";
	//   $user->password_confirmation = "password";
	 
	//   // User should not save
	//   $this->assertFalse($user->save());
	 
	//   // Save the errors
	//   $errors = $user->errors()->all();
	 
	//   // There should be 1 error
	//   $this->assertCount(1, $errors);
	 
	//   // The username error should be set
	//   $this->assertEquals($errors[0], "The username field is required.");
	// }
}
