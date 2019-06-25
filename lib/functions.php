<?php

function decode() {
  $url = './data/data.json';
  $a = file_get_contents($url);
  $json = json_decode($a, TRUE);
  return $json;
}

function myError($no, $errmsg, $errfile, $errline) {
  if ($errmsg = E_USER_WARNING) {
    echo "this myERROR func WARNING " . htmlentities($errmsg);
    $a = date('d-m-Y h-i-s');
    error_log("$errmsg on $a in $errfile : $errline", 3, 'error.log');
  }
}

function getConn() {
  $pdo = new PDO('mysql:dbname=phptest;host=localhost', 'root', 87456123);
  return $pdo;
}

function insertData($post) {
//  $pdo = getConn();
  $pdo = new PDO('mysql:dbname=phptest;host=localhost', 'root', 87456123);
  if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "INSERT INTO 'pet' ('name', 'breed') VALUES (:name, :surname)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($post);
  header_remove();
  header('Location: index.php');
}


function getData() {
  $pdo = getConn();
  $result = $pdo->query("SELECT * FROM pet");
  $row = $result->fetchAll();
  return $row;
}

function drawTable() {
  $i = 0;
  while ($i < 5) {
    $j = 0;
    while ($j < 5) {
      if ($j == 2) {
        break 2;
      }
//      echo "<br> $j";
      $j++;
    }
    $i++;
  }
}

function multiply($a, $b) {
  $c = $a * $b;
  return $c;
}

function menu($arr1, $vertical) {
  if (!is_array($arr1)) {
    return FALSE;
  }
  echo "<ul>";
  foreach ($arr1 as $key => $value) {
    echo "<li";
    if ($vertical) {
      echo ">";
    }
    else {
      echo "style='float: right;'>";
    }
    echo "<a href='{$value['href']}'> {$value['name']} </a>";
    echo "</li>";
  }
  echo "</ul>";
  return TRUE;

}

function foo(...$arg) {
  foreach ($arg as $key => $value) {
    echo "$key : $value";
  }
}

function arr_count($arr) {
  static $i = 0;
  foreach ($arr as $key => $val) {
    if (is_array($val)) {
      arr_count($val);
      continue;
    }
    $i++;
  }

  return $i;
}
 function mysql_conn(){
   $data=mysqli_connect('localhost', 'root', '87456123', 'phptest');
   return $data;
 }