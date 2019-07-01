<?php
include 'NewsDB.php';
NewsDB::dbDelete("{$_GET['del']}");
header("Location: news.php");
