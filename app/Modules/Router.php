<?php

class Router
{

  protected $routes = [];

  protected $currentURI;

  protected $currentMETHOD;

  protected $currentROUTE;


  protected $DEFAULT_CONTROLLER_PATH = 'app/Controllers/';

  public function __construct()
  {

    $pos = strpos($_SERVER['REQUEST_URI'] , '?') ? strpos($_SERVER['REQUEST_URI'] , '?')
                                                 : strlen($_SERVER['REQUEST_URI']);

    $this->currentURI    =  str_replace('/acu' , '' , substr($_SERVER['REQUEST_URI'],0 , $pos));

    $this->currentMETHOD = strtolower($_SERVER['REQUEST_METHOD']);
  }

  public function get(string $uri , array $options)
  {
      $this->routes[] = ['method' => 'get' ,'uri' => $uri , 'options' => $options];
  }

  public function post(string $uri , array $options)
  {
      $this->routes[] = ['method' => 'post' ,'uri' => $uri , 'options' => $options];
  }

  public function init()
  {
    $this->findRoute();
      

 
    if($this->currentROUTE){
      require $this->DEFAULT_CONTROLLER_PATH.$this->currentROUTE['options']['controller'].'.php';

      $s = new $this->currentROUTE['options']['controller'];

      $m = $this->currentROUTE['options']['func'];

      $s->$m();
    }

  }


  private function findRoute()
  {
    
    foreach($this->routes as $key => $route){

      if($route['method'] == $this->currentMETHOD && $route['uri'] == $this->currentURI){

        $this->currentROUTE = $route;
      }
    }
            

    if(!$this->currentROUTE){

      require 'public/Views/404.php';
    }

  }

}
