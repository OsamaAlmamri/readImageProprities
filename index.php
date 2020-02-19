<?php


//
//declare(strict_types=1) ;
//function sum (int $i , $u):int
//{
//    $z=$i+$u;
//    return  $z;
//
//}
//$students=array('s1'=>array('name'=>'abdah','age'=>20),'s2'=>array('name'=>'ali','age'=>20),'s3'=>array('name'=>'osama','age'=>20)) ;
//foreach ($students as $student  )
//{
//    echo( "<h1> ".$student['name']."</h1>");
//}
//
//echo sum (45,45);


?>
<form method="post" action="result.php" enctype="multipart/form-data">
    <input  type="text" name="username" value="" >
    <br>
    <input type="file" name="user_img" accept="image/*">
    <br>
    <input name="age" value="" type="number">
    <br>
    <input name="subject[]" value="c#" type="checkbox">c#
    <br>
    <input name="subject[]" value="java" type="checkbox">java
    <br>
    <input name="subject[]" value="c++" type="checkbox">c++
    <br>
    <input name="subject[]" value="c" type="checkbox">c
    <br> ginder :
    <input name="ginder" value="male" type="radio">male
    <input name="ginder" value="female" type="radio">female
    <br>
    <input type="submit" name="submit" value="login">
</form>
