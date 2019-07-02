<?php


class DbConn {
  const DB = 'phptest';

  const USER = 'root';

  const   PASSWORD = 87456123;

  const TABLE = 'news';
  public function __construct() {
  }

  public static function dbConn() {
    // TODO: Implem ent dbConn() method.
    $a= new PDO('mysql:host=localhost; dbname=phptest', 'root', 87456123);
    return $a;
  }
}