<?php
require 'INewsDB.php';
require 'DbConn.php';



class NewsDB implements INewsDB {
  public $dbConn;

  function __construct($d){
  // TODO: Implement dbConn() metho)
$this->dbConn=$d;
  }

  //  const DB = 'phptest';
//
//  const USER = 'root';
//
//  const   PASSWORD = 87456123;
//
//  const TABLE = 'news';
//
//  public static function dbCreate() {
//    $db = new SQLite3('news.db');
//    $table = 'CREATE TABLE news (id INTEGER NOT NULL  PRIMARY KEY AUTOINCREMENT,
//title TEXT NOT NULL,
//body TEXT NOT NULL,
// pdate TEXT NOT NULL,
//  source TEXT NOT NULL)';
//    $db->query($table);
//    return $db;
//  }

  //  public static function dbConn() {
  //
  //    if (file_exists('news.db')) {
  //      return new SQLite3('news.db');
  //    }
  //    else {
  //      return NewsDB::dbCreate();
  //    }
  //  }
  public static function dbConn() {}
//    // TODO: Implem ent dbConn() method.
//    return new PDO('mysql:host=localhost; dbname=phptest', 'root', 87456123);
//  }

//  function dbQuery($query) {
//    return $this->dbConn()->prepare($query)->execute();
//  }

  public function dbSave(array $a) {
    $query = 'INSERT INTO news (title, body, pdate, source) VALUES (?, ?, ?, ?)';
    $b=$this->dbConn->prepare($query);
    return $b->execute($a);

  }

  public function dbGet() {
    $query = 'SELECT * FROM news ';
    $a = $this->dbConn->prepare($query);
    $a->execute();
    return $a->fetchAll(PDO::FETCH_ASSOC);

  }

  public function dbDelete($id) {
    $query = "DELETE FROM news WHERE id=$id";
    $a = $this->dbConn->prepare($query);
    $a->execute();
    return $a;
  }
}
$db=new NewsDB(DbConn::dbConn());