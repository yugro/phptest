<?php error_reporting(-1);
$a=file_get_contents('data.json');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Let's test PHP</title>
</head>
<body>
<h1>This is page for testing php!!!</h1>
<?php
$b= json_decode($a, true);
var_dump($b);
$c=serialize($b);
var_dump($c);
$d=unserialize($c);
var_dump($d);
echo 'hello world!!!';
?>
<div></div>
<p>last partagraph</p>

</body>
</html>

