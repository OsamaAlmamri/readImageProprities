<?php


foreach ($_POST as $item) {

    if (is_array($item)) {
        foreach ($item as $i)
            echo $i . "<br>";
    } else {
        echo $item . "<br>";
    }

}

//var_dump($_FILES['user_img']);
$size = ($_FILES['user_img']['size'] / 1024 / 1024);
$info = explode('.', $_FILES['user_img']['name']);

echo "<br>";
echo "name ---- >  " . $_FILES['user_img']['name'] . "<br>";
echo "type ---- >  " . "<br>";
echo "size ---- >  " . (($size > 1) ? ($size . 'MB') : ($size * 1024) . 'KB') . '<br>';
echo "type ---- >  " . $_FILES['user_img']['type'] . "<br>";
$extensions = array('jpg', 'png', 'pdf');

if (in_array($info[end($info)], $extensions))
    move_uploaded_file($_FILES['user_img']['tmp_name'],
        'images/' . time() . $info[end($info)]);
else
    echo " file not allow ";


//move_uploaded_file($_FILES['user_img']['tmp_name'] , 'images/'.time().$_FILES['user_img']['name']);

