<?php 

function redirect($to)
{
 
  $to = '/acu/'.$to;

  header("Location: ".$to);
  exit;
}
