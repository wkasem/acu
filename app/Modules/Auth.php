<?php

require 'helpers.php';

class Auth
{

  public function __construct()
  {
    session_start();
  }

  public static function login($user)
  {

    $_SESSION['user'] = $user;

    redirect('registraion');
  }

  public function logout()
  {

   unset($_SESSION['user']);

   session_destroy();

   redirect();
  }
}
