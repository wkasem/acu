<?php

require_once 'Model.php';

class Menu extends Model
{

  protected  $table = 'menu';
    
   public static function find(array $f)
   {
    $instance = new static;
       $w=$f['id'];
    $data = $instance->stream
            ->query("SELECT menu.* , meal.* ,categore.name as cname FROM menu 
                  INNER JOIN meal ON menu.mealid = meal.idmeal 
                  INNER JOIN categore ON meal.categoreid = categore.idcategore where menu.resurantid = $w;");
       
    return $data->fetchAll();
   }
}