<?php
include_once '/var/www/phptest/lib/bookfunc.php';
//echo $_GET['id'];
echo dbDelete($_GET['id']);

header("Location: /eshop.php");