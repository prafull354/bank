<?php
include 'connection.php';
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)

{
    header("location: admin.php");
    
}
$id=$_GET['id'];
$query="delete from temporarytb where id=$id";
mysqli_query($con,$query);
header('location:dashboard.php');
?>
