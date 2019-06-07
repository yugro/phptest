<?php

function decode(){
$url = './data/data.json';
  $a = file_get_contents($url);
  $json = json_decode($a, TRUE);
  return $json;
}