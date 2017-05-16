<?php

require 'Controller.php';

require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/UserCourseDetails.php';

class userController extends Controller
{

  public function showSignup()
  {

    $this->view('public.Views.signup');
  }

  public function signup()
  {

    (new User)->create($_POST);

    Auth::login($_POST);
  }

  public function showLogin()
  {

    $this->view('public.Views.login');
  }

  public function login()
  {

    $user = (new User)->find( ['email' => $_POST['email'] ])[0];

    $registered = (new UserCoursesDetails)->count(['user_id'   => $user->id , 'semester' => date('Y')]);

    if(password_verify($_POST['password'], $user->password)){
      Auth::login($user);
       if($registered){
         redirect('home');
       }else{
         redirect('registraion');
       }
    }else{
      redirect('login');
    }


  }

  public function logout()
  {

    Auth::logout();

  }

}
