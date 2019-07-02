<?php
$db =  new SQLite3('news.db');
$db->close();
$a=new SQLite3('news.db');
var_dump($a);