<?php

require 'Controller.php';

require __DIR__.'/../Models/History.php';

class historyController extends Controller
{

  public function __construct()
  {

    session_start();

    $this->user_id = is_object($_SESSION['user']) ? $_SESSION['user']->id : $_SESSION['user']['id'];
  }

  public function index()
  {
    $history = (new History)->find( ['user_id' => $this->user_id] );

    $this->view('public.Views.profile.history' , ['history' => $history]);
  }

}
