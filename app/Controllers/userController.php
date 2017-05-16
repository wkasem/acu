<?php 
require 'Controller.php';
require __DIR__.'/../Models/City.php';
require __DIR__.'/../Models/User.php';
require_once __DIR__.'/../Modules/Auth.php';
require_once __DIR__.'/../Modules/helpers.php';


class userController extends Controller
{
   public function showSignup()
    {

        $cities = City::all();

        return $this->view('public.Views.signup' , compact('cities'));

    }
    
    public function signup()
    {
      
        User::create([
            'name'        => $_POST['Name'],
            'email'       => $_POST['Email'],
            'password'    => $_POST['Password'],
            'phonenumber' => $_POST['PhoneNumber'],
            'address'     => $_POST['Address'],
            'cityid'      => $_POST['CityId'],
            'role'        => 0
        ]);
        
        redirect('login');
    }
    
    public function showlogin()
    {
        return $this->view('public.Views.login');
    }
    
    public function login()
    {
        
        return Auth::login($_POST);
    }
    public function EditUser()
    {
        redirect('users');
    }


}