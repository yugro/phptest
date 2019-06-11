<?php
error_reporting(-1);
//echo "world";
//echo "\t";
//echo "hello";

$pdo = new PDO('mysql:dbname=phptest;host=localhost', 'root', 87456123);
$result = $pdo->query("SELECT * FROM pet");
$row = $result->fetchAll();
$arr = $_POST;
//$surname = $_POST['surname'];
$sql = "INSERT INTO pet (name, breed) VALUES (:name, :surname)";
$stmt = $pdo->prepare($sql);
if (!empty($arr)) {
  $stmt->execute($arr);
  unset($arr);
  header('Location: /index.php');
}
static $autoincrement = 0;
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
    <title>Hello, world!</title>
</head>
<body>
<h3>This is page for testing php!!!</h3>
<div class="row">
    <div class="col-lg-4">
        <form action="" method="post">
            <legend for="name">Your name</legend>
            <input type="text" id=name" name="name">
            <legend for="surname">Your surname</legend>
            <input type="text" id=surname" name="surname">
            <br>
            <button type="submit" class="btn btn-primary">Click me</button>
        </form>
    </div>
    <div class="col-lg-4">
        <h2>Results</h2>
        <table>
          <?php foreach ($row as $key => $value) { ?>
              <tr>
                  <th>No.</th>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Delete</th>
              </tr>
              <tr>
                  <td id="increment"></td>
                  <td>
                    <?php echo $value['name'] ?>
                  </td>
                  <td>
                    <?php echo $value['breed'] ?>
                  </td>
                  <td id="delete">
                      X
                  </td>
              </tr>
          <?php } ?>
        </table>
    </div>
</div>

<div id="specialistTest">
  <?php
  $a = ini_get("post_max_size");
  $param = $a{strlen($a) - 1};
  $a=(int) $a;
  switch ($param):
    case 'G':
      echo 'your post_max_size is ' . ($a *= 1024) . ' MBytes';
    case 'M':
      echo ' your post_max_size is ' . ($a *= 1024) . ' KBytes';
    case 'K':
      echo ' your post_max_size is ' . ($a *= 1024) . ' Bytes';
  endswitch;

  ?>
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




