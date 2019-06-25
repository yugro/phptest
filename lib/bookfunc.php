<?php
include_once '/var/www/phptest/config.php';
function dbConn() {
  $pdo = new PDO(DSN, DB_USER, DB_PASS);
  return $pdo;
}

function dbPrepareBookInsert() {
  $a = dbConn()->prepare("INSERT INTO eshop (title, author, pubyear, price) VALUES (?, ?, ?, ?)");
  return $a;
}

function dbBookInsert($title, $author, $pubyear, $price) {
  $arr = ["$title", "$author", "$pubyear", "$price"];
  dbPrepareBookInsert()->execute($arr);
}

function dbFetch() {
  $query = "SELECT id, title, author, pubyear, price FROM eshop";
  return dbConn()->query("$query", PDO::FETCH_ASSOC);
}

function dbDelete($id) {
  $query = ("DELETE FROM eshop WHERE id=$id");
//  echo $query;die;
  return dbConn()->exec($query);
}

function showCart(array $arr){
  $arr=implode(', ', $arr);
  $query = "SELECT id, title, author, pubyear, price FROM eshop WHERE id IN($arr)";
  foreach (dbConn()->query("$query", PDO::FETCH_ASSOC) as $row)
  $a[]=$row;
  return $a;
}