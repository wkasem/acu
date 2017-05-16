<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';

class DashBoardController extends Controller
{
   public function ShowUsers()
    {
        $Users = User::all();
        return $this->view('public.Views.dashboard' , compact('Users'));
    }
}