<form action="control/addbook.php" method="post">
  <input type="text" name="title" placeholder="enter title">
  <input type="text" name="author" placeholder="enter author">
  <input type="number" name="pubyear" placeholder="enter pubyear">
  <input type="number" name="price" placeholder="enter price">
  <button type="submit" name="addBook">Submit</button>
</form>
<?php
header("Location: /eshop.php");