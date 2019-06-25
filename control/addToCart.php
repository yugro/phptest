<?php

if (isset($_COOKIE['cart2'])) {
 $cart=unserialize(base64_decode($_COOKIE['cart2']));
 array_push($cart, "{$_POST['addToCart']}");
}
else{
  $cart=[];
  array_push($cart, "{$_POST['addToCart']}");
}
$cart=base64_encode(serialize($cart));
setcookie("cart2",$cart);

