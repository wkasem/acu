<?php 
require 'Controller.php';
require __DIR__.'/../Models/City.php';
require __DIR__.'/../Models/User.php';
require __DIR__.'/../Models/Country.php';
require __DIR__.'/../Models/Restaurant.php';
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
    
    public function showOrders()
    {
        $countries = Country::all();
        
        return $this->view('public.Views.orders' , compact('countries'));
    }
    
    public function login()
    {
        
        return Auth::login($_POST);
    }
    public function EditUser()
    {        
        User::update($_GET['id'] ,[
            'role' => $_GET['role']
        ]);
        redirect('users');
    }
    
    public function getCities()
    {
        
       header("Content-type: application/json");
        
       $c =  City::find([
            'countryid' => $_POST['id']
        ]);
        
        sleep(2);
        
        echo json_encode($c);
    }
    
    public function getRes()
    {
        
       header("Content-type: application/json");
        
       $c =  Restaurant::find([
            'cityidresturant' => $_POST['id']
        ]);
        
        sleep(2);
        
        echo json_encode($c);
    }


}