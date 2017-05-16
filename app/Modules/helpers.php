<?php

function redirect($to)
{

  $to = 'http://acu.dev/'.$to;

  header("Location: $to");
}
