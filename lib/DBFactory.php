<?php

class DBFactory
{

  public static function getMysqlConnexionPDO()
  {

    $db = new PDO ("mysql:host=localhost;dbname=houck",'houck','qsdf');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
}
