<?php

//$users=array('ram','sita','gita');

//echo $users;

//var_dump($users);

//echo "<pre>";
//print_r($users);

//echo 'your name is '.$users[2];

//$students=['ram','sita','gita','madan'];
//
//for ($x=0;$x<count($students);$x++){
//    echo $students[$x] . '<br>';
//}

//
//$users=[
//    ['ram','sita','gita','madan'],
//    ['sunita','rahul','jon','kalpana']
//
//
//];
//
//for ($x=0;$x<count($users);$x++){
//    for ($j=0;$j<count($users[$x]);$j++){
//        echo $users[$x][$j].'<br>';
//    }
//
//}


//$users=['name'=>'ram','age'=>12];
////
////echo "<pre>";
////print_r($users);
//
//foreach ($users as $user){
//
//    echo $user;
//
//}


$users=[
        ['name'=>'ram','address'=>'ktm','phone'=>98768765],
        ['name'=>'sita','address'=>'bkt','phone'=>98768765],
        ['name'=>'sophia','address'=>'us','phone'=>98768765],
        ['name'=>'jon','address'=>'china','phone'=>98768765]

];
//
//echo "<pre>";
//
//print_r($users);


//echo $users;


//echo 'your country  is '.$users[3]['address'];

//foreach ($users as $key=>$user){
////    echo $user['name'];
//    echo $key;
//}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<blockquote>
    <h1>Show Users</h1>
    <hr>
    <table border="1" width="100%">
        <thead>
        <tr>
            <td>s.n</td>
            <td>name</td>
            <td>address</td>
            <td>contact</td>
          
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $key=>$user) : ?>
        <tr>
            <td><?=++$key?></td
            <td><?=$user['name']?></td>
            <td><?=$user['address']?></td>
            <td><?=$user['phone']?></td>
        </tr>
        <?php  endforeach; ?>
        </tbody>
    </table>
</blockquote>

</body>
</html>