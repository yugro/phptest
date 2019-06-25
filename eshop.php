<?php
if (isset($_POST['addToCart'])) {
  include_once 'control/addToCart.php';
  header("LOCATION: /eshop.php");
}
include_once 'control/book.php';
include_once 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--   Bootstrap CSS-->
<!--  <link rel="stylesheet"-->
<!--        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
<!--        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"-->
<!--        crossorigin="anonymous">-->
  <link rel="stylesheet" href="css/sass.css">
  <title>Eshop</title>
</head>
<body>
<header>
  <button><a href="index.php"> Back to main site</a></button>
  <button><a href="eshop.php?id=add">Add a new book</a></button>
    <div style="display: inline-block; border: 1px solid grey">
        <a href="layout/cart.php">
        Books im you cart: <?php if (isset($_COOKIE["cart2"])) {
                $a=unserialize(base64_decode($_COOKIE["cart2"]));
                echo count($a);}
                ?>
        </a>
    </div>
  <h1 id="header"><?php echo isGetIdAdd() ? "Add a book screen": '' ?></h1>
</header>
<main>
  <div>
  <?php

  isGetIdAdd() ? include 'inc/$addbook.inc.php': include 'inc/showbooks.inc.php';

  ob_end_flush();
  ?>
  </div>
</main>
</body>
</html>