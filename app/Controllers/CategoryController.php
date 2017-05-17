<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Menu.php';
require __DIR__.'/../Models/category.php';

class CategoryController extends Controller
{
    public function addcat()
    {
        Category::create(['name' => $_POST['name']]);
        redirect('addmeal?id='.$_POST['id']);
    }
}