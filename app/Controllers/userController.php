<?php 
require 'Controller.php';
class userController extends Controller
{
   public function showSignup()
    {
        return $this->view('public.Views.signup');
    } 
}