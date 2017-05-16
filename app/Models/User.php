<?php

require_once 'Model.php';

class User extends Model
{

  protected  $table = 'user';
    public static function all()
   {
    $instance = new static;
    $data = $instance->stream->query("SELECT user.*,city.cityname FROM user INNER JOIN city ON user.cityid = city.idcity");
    return $data->fetchAll();
   }

}
