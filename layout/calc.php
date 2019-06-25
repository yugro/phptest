<?php
function calc() {
  switch (isset($_POST['calc3'])) {
    case '+':
      $result = $_POST['calc1'] + $_POST['calc2'];
      break;
    case '-':
      $result = $_POST['calc1'] - $_POST['calc2'];
      break;
    case '*':
      $result = $_POST['calc1'] * $_POST['calc2'];
      break;
    case '/':
      $result = $_POST['calc1'] / $_POST['calc2'];
      break;
    default:
      $result = 'error';
  }
  return $result;
}
function _reset($a) {
//    header_remove();
   header("Location: ../index.php?id=calc/$a");
}
?>
<div class="col-lg-4">
  <form action="layout/calc.php" method="post">
    <input type="number" name="calc1" placeholder="enter number">
    <input type="number" name="calc2" placeholder="enter number">
    <input type="text" name="calc3" pattern="+,-,*,/" placeholder="enter operator">
    <input type="submit" name="submit" value="Calculate">
    <input type="submit" name="reset" value="Reset">
  </form>
</div>
<div class="col-lg-3">
  result:<?php echo calc();
  ?>
</div>
<?php
$a=calc();
isset($_POST['submit']) ? _reset($a) : '';