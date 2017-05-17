<?php

require 'Modules/Router.php';

$router = new Router();

$router->get('/' , ['controller' => 'homeController' , 'func' => 'index']);

$router->get('/signup' , ['controller' => 'userController' , 'func' => 'showSignup']);
$router->get('/orders' , ['controller' => 'userController' , 'func' => 'showOrders']);
$router->get('/users' , ['controller' => 'DashBoardController' , 'func' => 'ShowUsers']);
$router->post('/signup' , ['controller' => 'userController' , 'func' => 'signup']);

$router->get('/login' , ['controller' => 'userController' , 'func' => 'showLogin']);
$router->get('/logout' , ['controller' => 'userController' , 'func' => 'logout']);
$router->post('/login' , ['controller' => 'userController' , 'func' => 'login']);
$router->get('/edituser',['controller' => 'userController' , 'func' => 'EditUser']);
$router->get('/restaurants',['controller' => 'restaurantsController' , 'func' => 'showrestaurant']);
$router->get('/deleteres',['controller' => 'restaurantsController' , 'func' => 'deleterestaurant']);
$router->get('/editres',['controller' => 'restaurantsController' , 'func' => 'editrestaurant']);
$router->get('/addrest',['controller' => 'restaurantsController' , 'func' => 'showaddresturant']);
$router->post('/editres',['controller' => 'restaurantsController' , 'func' => 'updateresturant']);
$router->post('/addrest',['controller' => 'restaurantsController' , 'func' => 'addresturant']);
$router->get('/menuadmin',['controller' => 'MenuController', 'func'=> 'ShowMenu'] );
$router->get('/addmeal',['controller' => 'MealController', 'func'=> 'addmeal']);
$router->post('/addcat',['controller' => 'CategoryController', 'func'=> 'addcat']);
$router->init();
