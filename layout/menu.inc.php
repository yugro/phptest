<?php
$arr1 = [
  0 => ['href' => 'index.php?id=table', 'name' => 'Table'],
  1 => ['href' => 'index.php?id=tools', 'name' => 'Tools'],
  2 => ['href' => 'index.php?id=contact', 'name' => 'Contacts'],
  3 => ['href' => 'index.php?id=calc', 'name' => 'Calculator'],
  4 => ['href' => 'index.php?id=fileupload', 'name' => 'Upload file'],
  5 => ['href' => 'eshop.php', 'name' => 'Eshop'],
];
//drawTable();
if (!(menu($arr1, TRUE))) {
  echo "sorry...";
  trigger_error('menu is incorrect', E_USER_WARNING);
}