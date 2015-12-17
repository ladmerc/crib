<?php

namespace Crib\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			'Crib\Storage\User\UserRepository',
      		'Crib\Storage\User\EloquentUserRepository'
		);
	}
}