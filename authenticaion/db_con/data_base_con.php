<?php

$servername="localhost";
$DBusername="root";
$DBpassword="";
$DBname="lib_database";


$connetion = mysqli_connect($servername,$DBusername,$DBpassword,$DBname);

if(!$connetion){
    die("connection faild" . mysqli_connect_error());
    echo "eeeeeeeeeeeeeeeeee";
    
}
    
