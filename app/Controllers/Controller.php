<?php

class Controller
{

  protected function view(string $path , $with = [])
  {

    $path  = str_replace('.' , '/' , $path).'.php';

    foreach ($with as $key => $value) {
      $$key = $value;
    }
    require $path;
  }
}
