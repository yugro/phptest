<?php
require_once "../lib/bookfunc.php";
if(isset($_COOKIE['cart2']))
$arr = (unserialize(base64_decode($_COOKIE['cart2'])));

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
    <title>Your cart</title>
</head>
<body>
    <header>
        <button><a href="../index.php"> Back to main site</a></button>
        <button><a href="../eshop.php?id=add">Add a new book</a></button>
        <button><a href="../eshop.php">Back to shop</a></button>
        <div style="display: inline-block; border: 1px solid grey">
            <a href="layout/cart.php">
                Books im you cart: <?php if (isset($_COOKIE["cart2"])) {
                echo count($arr);
              }
              ?>
            </a>
        </div>
    </header>
    <main>
        <div>
            <table id="books" style="border: 1px solid gray">
                <tr>
                    <th>ID</th>
                    <th style="display: none"></th>
                    <th>TITLE</th>
                    <th>AUTHOR</th>
                    <th>PUBYEAR</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                </tr>
              <?php
              foreach (showCart($arr) as $row):
                ?>
                  <tr>
<!--                      <td id="increment"></td>-->
                    <?php foreach ($row as $key => $value): ?>

                        <td>
                          <?php echo $value; ?>
                        </td>

                    <?php endforeach ?>
                      <td><a href="<?php echo "../control/deleteFromCart.php?id=";
                        print($row['id']) ?>">DELETE A BOOK FROM Cart</a></td>
                  </tr>
              <?php endforeach; ?>
            </table>
        </div>
    </main>
    </body>
    </html>
