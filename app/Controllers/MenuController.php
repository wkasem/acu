<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Menu.php';

class MenuController extends Controller
{
   public function ShowMenu()
    {
        $Menu = Menu::find(["id" => $_GET['id']]);
        return $this->view('public.Views.menuAdmin' , compact('Menu'));
    }
}