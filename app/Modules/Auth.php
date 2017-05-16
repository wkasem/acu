<?php

require_once 'helpers.php';

class Auth
{

  public function __construct()
  {
    session_start();
  }

  public static function login($data)
  {
    $user = User::find([
        'email' => $data['Email']
    ])[0];
      
 
    
    if(count($user)){
        if(password_verify( $data['Password'] , $user->password )){
            
                $_SESSION['user'] = $user;

                redirect('dashboard');
            
        }else{
           redirect('login');

        }
    }else{
           redirect('login');

    }

  }

  public function logout()
  {

   unset($_SESSION['user']);

   session_destroy();

   redirect();
  }
}
