<?php
include 'connection';
session_start();
?>
<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass= $_POST['password'];

    if('prafullyadav354@gmail.com'==$email && 'prafull'== $pass)
    {
        // $email;
        // $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('location:dashboard.php');
        //echo " match email & password";
    }
    else{
        echo "not match email & password";
    }
}
?>