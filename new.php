<?php

echo $username = $_POST["username"];   
echo "<br>";
echo $place = $_POST["place"];
$cavid =  $_FILES["sekil"]["name"];

$target_dir = "uploads/";

$target_file = $target_dir . $username .".". basename($_FILES["sekil"]["name"]);

$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

 $file = fopen("list.txt","a+") or die("fayl tapilmadi");
 
if ($imageFileType == 'jpg' || $imageFileType == 'png'|| $imageFileType == 'gif') {
    if ($_FILES['sekil']['size'] < 500*1024) {
        move_uploaded_file($_FILES["sekil"]["tmp_name"] , $target_file);
        fwrite($file , $username."|".$place."|".$target_file."@");
    } else {
        echo 'olçu boyukdu max 500 kb';
    }
} else {
    echo 'bu fayl ' . $imageFileType;
}

fclose($file);
header('Location:index.php');
 