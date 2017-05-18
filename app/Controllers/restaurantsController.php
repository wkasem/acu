<?php 
require 'Controller.php';
require __DIR__.'/../Models/City.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Restaurant.php';
require_once __DIR__.'/../Modules/Auth.php';
require_once __DIR__.'/../Modules/helpers.php';


class restaurantsController extends Controller
{
   public function showrestaurant()
   {
       $res = Restaurant::all();
       return $this->view('public.Views.Restaurants' , compact('res'));
   }
    public function deleterestaurant()
    {
        Restaurant::delete(['idresurant' => $_GET['id']]);
        redirect('restaurants');
    }
    public function editrestaurant()
    {
        $res = Restaurant::find(['idresurant' => $_GET['id']]);
        $cities = City::all();

        return $this->view('public.Views.editrestaurants' , compact('res','cities'));
    }
    public function updateresturant()
    {
        
        
        Restaurant::delete(['idresurant' => $_POST['id']]);
        
        Restaurant::create([
            'nameresturant'        => $_POST['Name'],
            'phonenumberresturant' => $_POST['PhoneNumber'],
            'address'              => $_POST['Address'],
            'cityidresturant'      => $_POST['CityId'],
        ]);   
        redirect('restaurants');
//        User::update($_GET['id'] ,[
//            'role' => $_GET['role']
//        ]);
        //redirect('restaurants');
    }
    public function showaddresturant()
    {
        $cities = City::all();
     return $this->view('public.Views.addrest',compact('cities'));   
    }
    public function addresturant()
    {
        
        Restaurant::create([
            'nameresturant'        => $_POST['Name'],
            'phonenumberresturant' => $_POST['PhoneNumber'],
            'address'              => $_POST['Address'],
            'cityidresturant'      => $_POST['CityId'],
        ]);   
        redirect('restaurants');
    }
}