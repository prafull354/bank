<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    echo $name = $_POST['name'];
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];
    echo$contact = $_POST['contact'];
    echo $contact = $_POST['contact'];
    echo $city = $_POST['city'];
    echo $address = $_POST['address'];

   $sql = "INSERT INTO `temporarytb`(`name`, `email`, `password`, `contact`, `city`, `address`) VALUES ('$name','$email','$password','$contact','$city','$address')";
    
    if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
    ?>
    <?php } ?>