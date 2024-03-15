
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="">
<?php
include 'connection.php';
$id= $_GET['id'];


   function abc(){
          $acc="ac";
          $time=time();
          $random_no=rand(15,35);
          $ins=$acc.$time.$random_no;
     return($ins);  

   } 
   echo $account_no=abc();
   
   

$sql = "select * from temporarytb where id=$id ";
  $query=mysqli_query($con,$sql);
  while($res=mysqli_fetch_array($query))
  {

  $insi= mysqli_query($con,"insert into user (name,email,account,password,city,address) 
  values('{$res['name']}','{$res['email']}','{$account_no}','{$res['password']}','{$res['city']}','{$res['address']}')");
  if($insi){
    mysqli_query($con, "DELETE FROM temporarytb WHERE id=".$id);
    header("Location:dashboard.php");
  } 
  // if (mysqli_query($con, $insi)) {
  //   header('location:dashboard.php');

  //   //echo "New record created successfully";
  // } 
  else {
    echo "Error: " . $insi . "<br>" . mysqli_error($conn);
  }

  }
  ?>
</body>
</html>



  