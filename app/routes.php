<?php

require 'Modules/Router.php';

$router = new Router();

$router->get('/' , ['controller' => 'homeController' , 'func' => 'index']);

$router->get('/signup' , ['controller' => 'userController' , 'func' => 'showSignup']);
$router->post('/signup' , ['controller' => 'userController' , 'func' => 'signup']);

$router->get('/login' , ['controller' => 'userController' , 'func' => 'showLogin']);
$router->get('/logout' , ['controller' => 'userController' , 'func' => 'logout']);
$router->post('/login' , ['controller' => 'userController' , 'func' => 'login']);


$router->get('/registraion' , ['controller' => 'registraionController' , 'func' => 'index']);
$router->post('/registraion' , ['controller' => 'registraionController' , 'func' => 'register']);

$router->get('/registraion/invoice' , ['controller' => 'registraionController' , 'func' => 'showInvoice']);

$router->get('/registraion/history' , ['controller' => 'historyController' , 'func' => 'index']);


$router->init();
