<?php

require_once __DIR__.'/../Modules/Auth.php';

class Model
{

  protected $primaryKey = 'id';

  private $stream;

  public function __construct()
  {

    try{
      $this->stream = new PDO('mysql:host=127.0.0.1;dbname=acu','root','');
      $this->stream->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      $this->stream->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e){
         die("failed to Connect to Database : {$e->getMessage()}");
    }
  }

  public static function find(array $find)
  {
    
    $instance = new static;
      
    if(!count($find)) return false;

    $queryStr = '';

    foreach($find as $key => $value){
      $queryStr .= "{$key} = '{$value}' AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));

    $data = $instance->stream->query("SELECT * FROM {$instance->table} WHERE {$queryStr}");

    return $data->fetchAll();

  }
    
  public static function all()
  {

    $instance = new static;
      
    $data = $instance->stream->query("SELECT * FROM {$instance->table}");

    return $data->fetchAll();
  }

  public static function create(array $data)
  {

      $instance = new static;
      
       if(array_key_exists('password' , $data)){
         $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
       }

       $into   = implode(array_keys($data) , ',');

       $values = implode(array_values($data) , "','");

       $instance->stream->query("INSERT INTO {$instance->table}($into) VALUES ('$values')");

  }

  public static function delete(array $by)
  {

    $instance = new static;
      
    $queryStr = '';

    foreach($by as $key => $value){
      $queryStr .= "{$key} = {$value} AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));


    $instance->stream->query("DELETE FROM {$instance->table} WHERE {$queryStr}");

  }

  public static function count(array $find)
  {
    $instance = new static;
      
    if(!count($find)) return false;

    $queryStr = '';

    foreach($find as $key => $value){
      $queryStr .= "{$key} = '{$value}' AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));

    $data = $instance->stream->query("SELECT * FROM {$instance->table} WHERE {$queryStr}");

    return $data->fetchColumn();

  }


}
