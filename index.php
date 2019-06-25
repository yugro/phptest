<?php
error_reporting(-1);
const PATH_LOG = "log/path.log";
//echo $_COOKIE["c"];
//include "inc/log.inc.php";
if (isset($_COOKIE['user'])) {
  $info = unserialize(base64_decode($_COOKIE['user']));
  if (date('d-m-Y') != date('d-m-Y', $info['time'])) {
    $info['visits']++;
  }
  $info['time'] = time();
}
else {
  $info = [
    'name' => 'John',
    'nick' => 'terminator',
    'visits' => 1,
    'time' => time(),
  ];
}
$user = base64_encode(serialize($info));
setcookie("user", $user);

include_once "./lib/functions.php";
//set_error_handler("myError", E_ALL);
$title = 'my first site';
$header = 'Welcome guest';
if (isset($_GET['id'])) {
  $id = strtolower(strip_tags(trim($_GET['id'])));
  switch ($id) {
    case 'table':
      $title = "Data table";
      $header = "this is table of our guests";
      break;
    case 'tools':
      $title = "this is new super tool";
      $header = "this is tool to make table of multiplication";
      break;
    case 'contact':
      $title = "Contact info";
      $header = "contact us";
      break;
    case 'calc':
      $title = "calculator";
      $header = "this is tool for calculation";
      break;
  }
}

try{
$pdo=new PDO('mysql:host=localhost;dbname=phptest','root', '87456123');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$result=$pdo->query('SELECT * from users');
foreach ($result as $row){
//    var_dump($row);
}
}catch (PDOException $e){
exit($e->getMessage());
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/sass.css">
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo "hello {$info['name']}. You are here for the  {$info['visits']} time and your last vizit was at " . date('d-m-Y : H-m-s', $info['time']) ?></h1>
<h3><?php echo $header . ' now is ' . date('h-m-s') . 'php self ' . $_SERVER['PHP_SELF'] ?></h3>
<div class="row">
  <?php
  if (isset($_GET['id'])) {
    switch ($id) {
      case 'table':
        include './layout/table.php';
        break;
      case 'tools':
        include './layout/tools.php';
        break;
      case 'contact':
        include './layout/contact.php';
        break;
      case 'calc':
        include './layout/calc.php';
        break;
      case 'fileupload':
        include './layout/file.php';
        break;
      default:
        include './layout/index.inc.php';
    }
  }
  else {
    include './layout/index.inc.php';
  }
  ?>
</div>

<div id="specialistTest">
  <?php
  include "./layout/menu.inc.php";

  ?>

</div>
<div>
  <?php //phpinfo(); ?>
</div>
<div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>



