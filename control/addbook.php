<?php
include_once '../lib/bookfunc.php';
dbBookInsert($_POST['title'],$_POST['author'],$_POST['pubyear'],$_POST['price']);
header("Location: /eshop.php");
