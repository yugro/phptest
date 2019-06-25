<div class="col-lg-4">
<form  action="../index.php?id=tools" method="post">
    <label for="rows">Enter number of rows</label><br>
    <input type="number" name="rows" id="rows" pattern="[0-9]{1}"  required="required"><br>
    <label for="columns">Enter num of cols</label><br>
    <input type="number" name="columns" id="columns" pattern="[0-9]{1}"><br>
    <label for="color">choose color</label><br>
    <input type="color" name="color" id="color"><br>
    <button type="submit">submit</button>
</form>
<table style="background: <?php if (isset($_POST['color']))
  echo $_POST['color'] ?>">
  <?php
  if (isset($_POST['rows'])) {
    $rows = (int) $_POST['rows'];
  }
  if (isset($_POST['columns'])) {
    $columns = (int) $_POST['columns'];
  }
  $i = 1;

  if (isset($rows)) {
    while ($i < $rows + 1) {
      ?>
        <tr>
          <?php
          $j = 1;
          while ($j < $columns + 1) {

            if ($j == 0 || $i == 0) {
              echo "<th>" . multiply($i, $j) . "</th>";
            }
            else {
              echo "<td>" . multiply($i, $j) . "</td>";
            }

            $j++;
          } ?>
        </tr>
      <?php $i++;
    }
  }
//  header_remove();
//  header("Location: ".$_SERVER["PHP_SELF"]);
  ?>
</table>
</div>
<?php
if (isset($_POST)) {

//

}
