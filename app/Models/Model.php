<?php

require __DIR__.'/../Modules/Auth.php';

class Model
{

  protected $primaryKey = 'id';

  private $stream;

  public function __construct()
  {

    try{
      $this->stream = new PDO('mysql:host=127.0.0.1;dbname=acu','homestead','secret');
      $this->stream->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
      $this->stream->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e){
         die("failed to Connect to Database : {$e->getMessage()}");
    }
  }

  public function find(array $find)
  {

    if(!count($find)) return false;

    $queryStr = '';

    foreach($find as $key => $value){
      $queryStr .= "{$key} = '{$value}' AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));

    $data = $this->stream->query("SELECT * FROM {$this->table} WHERE {$queryStr}");

    return $data->fetchAll();

  }

  public function create(array $data)
  {

       if(array_key_exists('password' , $data)){
         $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
       }

       $into   = implode(array_keys($data) , ',');

       $values = implode(array_values($data) , "','");

       $this->stream->query("INSERT INTO {$this->table}($into) VALUES ('$values')");

  }

  public function delete(array $by)
  {

    $queryStr = '';

    foreach($by as $key => $value){
      $queryStr .= "{$key} = {$value} AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));


    $this->stream->query("DELETE FROM {$this->table} WHERE {$queryStr}");

  }

  public function count(array $find)
  {

    if(!count($find)) return false;

    $queryStr = '';

    foreach($find as $key => $value){
      $queryStr .= "{$key} = '{$value}' AND ";
    }

    //remove last AND
    $queryStr = substr($queryStr,0 , strripos($queryStr , 'AND'));

    $data = $this->stream->query("SELECT * FROM {$this->table} WHERE {$queryStr}");

    return $data->fetchColumn();

  }


}
