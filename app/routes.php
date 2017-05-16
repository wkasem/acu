<?php

require 'Modules/Router.php';

$router = new Router();

$router->get('/' , ['controller' => 'homeController' , 'func' => 'index']);

$router->get('/signup' , ['controller' => 'userController' , 'func' => 'showSignup']);
$router->get('/orders' , ['controller' => 'userController' , 'func' => 'showOrders']);
$router->get('/dashboard' , ['controller' => 'DashBoardController' , 'func' => 'ShowUsers']);
$router->post('/signup' , ['controller' => 'userController' , 'func' => 'signup']);

$router->get('/login' , ['controller' => 'userController' , 'func' => 'showLogin']);
$router->get('/logout' , ['controller' => 'userController' , 'func' => 'logout']);
$router->post('/login' , ['controller' => 'userController' , 'func' => 'login']);
$router->get('/edituser',['controller' => 'userController' , 'func' => 'EditUser']);
$router->init();
