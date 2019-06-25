<?php
$cart=unserialize(base64_decode($_COOKIE['cart2']));
$cart=str_replace($_GET['id'], '1', $cart);
$cart=base64_encode(serialize($cart));
//setcookie("cart2",'',time()-3600);
setcookie("cart2",$cart);
header("Set-Cookie: cart2=$cart; Domain=phptest.loc; Path=/; secure; HttpOnly");
//header("Location: /eshop.php");