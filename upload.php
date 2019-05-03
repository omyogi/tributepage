<?php
$username= $_POST['username'];
$f=$_FILES['myfile'];
echo "Hello $username";
echo "File Name: ".$f['name'];
echo "File Type: ".$f['type'];
echo "File Size: ".$f['size'];
if (file_exists("photos/".$f['name']))
{
    echo $f ['name']."The image already exists ";
}
else if( $f['type']=="image/jpeg")
{
    move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else 
echo "File Format not supported.Try to Upload image in jpeg format";
?>
