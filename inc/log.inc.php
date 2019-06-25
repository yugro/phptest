<?php
$dt=time();
$page=$_GET['id'] ?? 'index'  ;
$ref=$_SERVER['HTTP_REFERER'];
$ref = pathinfo($ref, PATHINFO_BASENAME);
list($r,$ref)=explode('=',$ref);
print_r($ref);
$path="$dt | $page => $ref\n";

file_put_contents(PATH_LOG, $path,FILE_APPEND);




