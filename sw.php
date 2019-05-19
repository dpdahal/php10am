<?php


//$language = 'nepali';

//$x=10;$y=20;
//
//
//switch ($language) {
//    case 'nepali':
//        echo " yes " . $language;
//        break;
//    case 'english':
//        echo "yes " . $language;
//        break;
//    default:
//        echo "language not set";
//
//}


$x=10;
$y=20;

$opr="+";

switch ($opr){
    case '+':
        $res=$x+$y;
        echo 'total num is '.$res;
        break;
    case '-':
        echo $x-$y;
        break;

    default:
        echo "not found operator";

}