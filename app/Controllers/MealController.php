<?php 
require 'Controller.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Menu.php';
require __DIR__.'/../Models/Meal.php';
require __DIR__.'/../Models/Category.php';

class MealController extends Controller
{
    public function addmeal()
    {
//        Meal::create([
//            'name'        => $_POST['name'],
//            'discription'       => $_POST['discription'],
//            'price'    => $_POST['price'],
//            'categoreid' => $_POST['category'],
//            'extra'     => $_POST['extra'],
//        ]);
        $cat = Category::all();
        return $this->view('public.Views.addmeal' , compact('cat'));
    }
}