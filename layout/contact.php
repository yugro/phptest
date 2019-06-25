<?php
$link =mysqli_connect('localhost', 'root', '87456123', 'phptest');
$query_get="SELECT id, name, email, description FROM users";
$result_get=mysqli_query($link, $query_get);
$result_get=mysqli_fetch_all($result_get);
?>
<div class="row">
<div class="col-lg-4" style="margin-left: 30px">
    <form method="post" action="layout/contact.php">
        <div class="form-group">
            <input type="text" name="name" placeholder="enter your name">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="enter your email">
        </div>
        <div class="form-group">
            <textarea name="description"
                      placeholder="enter your description"></textarea>
        </div>
        <input type="submit" name="submit" placeholder="submit">
    </form>
</div>
<div class="col-lg-6" style="display: inline-block; margin-left: auto">
    <?php
    foreach ($result_get as $key=>$value):
    echo <<<MED
      <div class="form-group float-left" style="margin-left: 3px;border: 1px solid black">{$value['0']}</div>
    <div class="form-group float-left" style="margin-left: 3px;border: 1px solid black">{$value['1']}</div>
    <div class="form-group float-left" style="margin-left: 3px;border: 1px solid black">{$value['2']}</div>
    <div class="form-group float-left" style="margin-left: 3px;border: 1px solid black">{$value['3']}</div>
    <div style="clear:both;"></div>
    MED;
endforeach;
    ?>
</div>
</div>
<?php

//var_dump($result_get);die;
if (!empty($_POST)) {

    $query = "INSERT INTO users (name, email, description) VALUES ('$_POST[name]', '$_POST[email]','$_POST[description]')";
  //  var_dump($_POST);
  //  echo $query;die;
  $result = mysqli_query($link, $query);
  //  echo mysqli_affected_rows($link);
  mysqli_close($link);
  header("Location: ../index.php?id=contact");
}
