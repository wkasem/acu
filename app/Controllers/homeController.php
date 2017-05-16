<?php

require 'Controller.php';

require __DIR__.'/../Models/User.php';

class homeController extends Controller
{

  public function index()
  {

    $this->view('public.Views.home');
  }

  public function about()
  {

    $this->view('public.Views.about');
  }

}
