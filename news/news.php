<?php
require 'NewsDB.php';
//require 'DbConn.php';

$title = 'News';
?>
<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <link href="news.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php
if (isset($_GET['id'])) {
  if ($_GET['id'] == 'add') {
    include "saveNews.inc.php";
  }
  $title = 'Add article';
  ?>
    <h2><?php echo $title ?></h2>
  <?php
}
else {
?>
    <h2><?php echo $title ?></h2>
  <?php
  echo <<<DOC
<div id='addNews'><a href='news.php?id=add'>Add article</a></div>
DOC;
  ?>
    <table id="showNews">
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Article</td>
            <td>Date</td>
            <td>Source</td>
            <td>Action</td>
        </tr>

      <?php
      foreach ($db->DBget() as $new):
        echo '<tr>';
        foreach ($new as $key => $value):
          echo '<td>';
          echo $value;

        echo '</td>';
        endforeach;
        echo "<td><form method='get' action='deleteNews.php'><button type='submit' value='{$new["id"]}' name='del' >Delete</button></form></td>";

      echo '</tr>';
 endforeach;
      ?>
    </table>
<?php } ?>
</body>
</html>
