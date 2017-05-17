<?php

require_once 'Model.php';

class Menu extends Model
{

  protected  $table = 'menu';
    
   public static function all($id)
   {
    $instance = new static;
    $data = $instance->stream
            ->query("
               SELECT menue.* , meal.* ,categore.name FROM menu m
                  INNER JOIN meal ON m.mealid = meal.idmeal 
                  INNER JOIN categore ON meal.categoreid = categore.idcategore 
               where menue.resurantid = $id ");
       
    return $data->fetchAll();
   }
}