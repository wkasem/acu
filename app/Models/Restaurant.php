<?php

require_once 'Model.php';

class Restaurant extends Model
{

  protected  $table = 'resurant';
    public static function all()
   {
    $instance = new static;
    $data = $instance->stream->query("SELECT resurant.*,city.cityname FROM resurant INNER JOIN city ON resurant.cityidresturant = city.idcity");
    return $data->fetchAll();
   }
}