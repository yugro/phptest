<?php

include_once "lib/bookfunc.php";

?>
<table id="books">
    <tr>
        <th>No</th>
        <th style="display: none"></th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>PUBYEAR</th>
        <th>PRICE</th>
        <th>ACTION</th>
    </tr>
  <?php foreach (dbFetch() as $row): ?>
      <tr>
          <td id="increment"></td>
        <?php foreach ($row as $key => $value): ?>
            <td>
              <?php echo $value; ?>
            </td>

        <?php endforeach ?>
          <td><a href="<?php echo "control/deleteBook.php?id=";
            print($row['id']) ?>">DELETE A BOOK FROM ESHOP</a></td>
          <td>
<!--              <a href="--><?php //echo "control/addToCart.php?id=";print($row['id']); ?><!--">-->
            <form method="post" action="../eshop.php">
                <button type="submit" name="addToCart" value="<?php echo $row['id'] ?>">
              ADD TO CART
                </button>
</form>
<!--              </a>-->

          </td>
          <?php
//            if (isset($_COOKIE["cart2"])) {
//                $a=unserialize(base64_decode($_COOKIE["cart2"]));
//              foreach ($a as $value){
//                  echo "<td>".$value."</td>";
//              }
//
//            }
             ?>
<!--          </td>-->
      </tr>
  <?php endforeach;
   ?>
</table>
