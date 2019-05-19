<?php


//$x = 10;
//$y = '10';
//
//
//if ($x === $y) {
//    echo "yes";
//} else {
//    echo "no";
//}


$username = 'admin';
$password = 'admin002';



if(($username=='admin' && $password=='admin002') || ($username=='ram' && $password=='ram002')){
    echo "welcome ".$username;
}
else{
    echo "username & password not match";
}


//
//if ($username == 'admin' && $password == 'admin002') {
//    echo "welcome " . $username;
//
//} else {
//    echo "username & password not match";
//}


//$x = 10;
//$y = 20;
//$z = 30;


//if($x>$y && $x>$z){
//    echo "x";
//}elseif ($y>$x && $y>$z){
//    echo 'y';
//}else{
//    echo 'z';
//}


//if ($x > $y) {
//    if ($x > $z) {
//        echo "x";
//    } else {
//        echo 'z';
//    }
//} else {
//    if ($y > $z) {
//        echo "y";
//    } else {
//        echo 'z';
//    }
//}