<?php 
namespace Crib\Storage\User;
 
use User;
 
class EloquentUserRepository implements UserRepository {

  public $userModel;

  public function __construct(User $user)
  { 
    $this->userModel = $user;
  }
 
  public function all()
  {
    return User::all();
  }
 
  public function find($id)
  {
    return User::find($id);
  }
 
  public function create($input)
  {
    return User::create($input);
  }
 
}