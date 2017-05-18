<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Menu.php';

class MenuController extends Controller
{
   public function ShowMenu()
    {
        $Menu = Menu::find(["id" => $_GET['id']]);
       if(isset($_GET['idd']))
       {
        return $this->view('public.Views.menuAdmin' , compact('Menu'));   
       }
       else
       {
           return $this->view('public.Views.menuUser' , compact('Menu'));
       }
        
    }
    public function requestorder()
    {
        $i = 0 ; 
        while(isset($_POST[$i]))
        {
            echo $_POST[$i];
            echo "Done";
            $i++;
        }
        
    }
}