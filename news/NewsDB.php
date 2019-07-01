<?php
require 'INewsDB.php';

class NewsDB implements INewsDB {

  const DB = 'phptest';

  const USER = 'root';

  const   PASSWORD = 87456123;

  const TABLE = 'news';

  //  function dbConn(){
  //    $db=new SQLite3('news.db');
  //    $table='CREATE TABLE news (id,title,news)';
  //  }
  public static function dbConn() {
    // TODO: Implem ent dbConn() method.
    return new PDO('mysql:host=localhost; dbname=phptest', 'root', 87456123);
  }

  //  function dbQuery($query){
  //    return $this->dbConn()->prepare($query)->execute();
  //  }

  public static function dbSave(array $a) {
    $query = 'INSERT INTO news (title, body, pdate, source) VALUES (?, ?, ?, ?)';
    return NewsDB::dbConn()->prepare($query)->execute($a);

  }

  public static  function dbGet() {
    $query = 'SELECT * FROM news ';
    $a = NewsDB::dbConn()->prepare($query);
    $a->execute();
    return $a->fetchAll(PDO::FETCH_ASSOC);

  }

  public static function dbDelete($id) {
    $query = "DELETE FROM news WHERE id=$id";
    $a = NewsDB::dbConn()->prepare($query);
    $a->execute();
    return $a;
  }
}