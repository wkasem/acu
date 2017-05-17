<?php

require_once 'Model.php';

class Menu extends Model
{

  protected  $table = 'menu';
    public static function all($id)
   {
    $instance = new static;
    $data = $instance->stream->query("SELECT meal.* FROM menu INNER JOIN meal ON menu.mealid = meal.idmeal where resurantid =$id ");
    return $data->fetchAll();
   }
}