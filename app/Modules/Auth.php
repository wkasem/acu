<?php

require_once 'helpers.php';

class Auth
{


  public static function login($data)
  {
    $user = User::find([
        'email' => $data['Email']
    ])[0];
      
 
    
    if(count($user)){
        if(password_verify( $data['Password'] , $user->password )){
                session_start();
            
                $_SESSION['user'] = $user;
               
                redirect(($user->role) ? 'dashboard' : 'orders');
            
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
