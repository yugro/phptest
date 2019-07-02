<?php
include 'NewsDB.php';

$arr=[$_POST['title'],$_POST['body'], $_POST['pdate'], $_POST['source']];


$db->dbSave($arr);
header("Location: news.php");