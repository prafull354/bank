<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "bank";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
   // header('register_script.php');
    //echo "connection is successfully";
    //session_start();
}
else{
   die( "connection is successfully".mysqli_connect_error());
}
?>