<?php
error_reporting(-1);
require_once "user.php";
//require_once "Superuser.php";
$user1= new User('petro','pet',111);
$user2= new User('stepan', 'step', 222);
$user3= new User('Vasyl','vas', '333');

$newcomer = new User('vasya','petro',555);
$newcomer2 = new User('lkjh','lkj',654);

$newcomer3=new User('sdfg','dfg',54);
$newcomer4=new User('sdfg','dfg',54);
$newcomer5=new User('sdfg','dfg',54);
$newcomer6=new User('sdfg','dfg',54);
$newcomer7=new User('sdfg','dfg',54);

$newcomer5=new Superuser('sdfg','dfg',54);
$newcomer6=new Superuser('sdfg','dfg',54);
$newcomer7=new Superuser('sdfg','dfg',54);

echo User::$Count."<br>";
echo Superuser::$CountS;