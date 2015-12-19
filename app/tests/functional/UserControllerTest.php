<?php

class UserControllerTest extends TestCase
{
	public function setUp()
	{
	  parent::setUp();
	 
	  $this->mock = $this->mock('Crib\Storage\User\UserRepository');
	}

	public function tearDown()
	{
	  Mockery::close();
	}
	  
	public function mock($class)
	{
	  $mock = Mockery::mock($class);
	  
	  $this->app->instance($class, $mock);
	  
	  return $mock;
	}

	// alias to run this test only by phpunit --group user
	/**
	* @group user
	*/

	// public function testIndex()
	// {
	// 	$this->mock->shouldReceive('all')->once();
	 
	// 	$this->call('GET', 'users_all');
	 
	// 	$this->assertResponseOk();
	// }

	/**
	* @group user2
	*/

	public function testCreateUser()
	{
		$this->call('GET', 'users/create');
		$this->assertResponseOk();
	}

	public function testStoreUserFails()
	{
		$this->mock->shouldReceive('store')->once()->andReturn(false);
		$this->call('POST', 'users');
		$this->assertResponseOk();
	}

	// public function testArchiveHasPosts()
	// {
	//   $this->mock
	//     ->shouldReceive('all')
	//     ->once()
	//     ->andReturn('foo');
	  
	//   // $this->app->instance('Post', $this->mock);
	  
	//   $this->call('GET', 'user');
	  
	//   $this->assertViewHas('user');
	// }
}