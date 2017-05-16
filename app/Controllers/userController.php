<?php 
require 'Controller.php';
require __DIR__.'/../Models/City.php';

class userController extends Controller
{
   public function showSignup()
    {

        $cities = City::all();
        
        return $this->view('public.Views.signup' , compact('cities'));
    }
    public function showlogin()
    {
        return $this->view('public.Views.login');
    }
}