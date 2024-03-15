<?php
if(isset($_POST['submit']))
{
   include 'connection.php';
    $email= $_POST['email'];
    $pass= $_POST['password'];

     $sel = "SELECT * FROM temporarytb WHERE email='$email' && password='$pass'"; 
    $query=mysqli_query($con,$sel);
    $row=mysqli_num_rows($query);
    $fetch=mysqli_fetch_array($query);
    if($row==1){
       $username=$fetch['username'];
       session_start();
       $session['username']=$username;
       header('location:dashboard.php');
    }
    else
    {
       echo "<p style='color:red'>invalid email/password</p>";
    }
}
?>