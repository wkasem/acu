<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Menu.php';

class MenuController extends Controller
{
   public function ShowUsers()
    {
        $Menu = Menu::all();
        return $this->view('public.Views.dashboard' , compact('Menu'));
    }
}