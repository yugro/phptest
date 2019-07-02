<?php
include 'NewsDB.php';
$db->dbDelete("{$_GET['del']}");
header("Location: news.php");
