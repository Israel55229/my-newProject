<?php 
  class User {
    /* class variable */
    public $name;
    public $email;

    /* class functions or methods */
    public function login() {
      return this->name . ' has logged in';
    }
  }

  /* instanctiating a class */
  $user1 = new User();
  $user1->name = 'John Doe';
  $user1->email = 'johndoe@gmail.com';

  echo $user1->name;
  echo $user1->login():
?>
