<?php
include 'connection.php';

session_start();

// Check if the user is not logged in, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)

{
    header("location: admin.php");
    exit;
}
echo "Welcome, " . $_SESSION['email'] . "!";

?>
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

<div class="container-fluid" >
  <div class="row">
  
  <nav class="navbar navbar-expand-lg navbar-info  nave " >
   <div class="container-fluid login">
     <a class="navbar-brand " href="#">
       <img src="image/logo.jpg" alt="" class="logo"></a>
     <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item btn">
          <a class="nav-link active  but" aria-current="page" href="logout.php">Logout</a>
        </li>
        
       </ul>
    </div>
  </div>
   </nav>

   </div>
    </div>
  <div class="container">

   <div class=" col-lg-12 d-flex navie">
     <div class="col-lg-3 my-4">
            <img src="image/images1.jpg" alt="text" class="img">
           <h5 class="admin"> admin </h5>
     </div>    
     <div class="col-lg-3 my-auto">
      <h4>Name: <spam style="font-size:20px;">Prafull kumar yadav</spam></h4>
      <h4>Email: <spam style="font-size:20px;">prafullyadav354@gmail.com</spam></h4>
      <h4>contact: <spam style="font-size:20px;">8318956325</spam></h4>
      </div>
        
</div>
    </div>
    

    <div class="container-fluied ">
    <h2 class="nave py-3 txxt">User Request</h2>
</div>
<div class="container ">
   <div class="col-lg-12 ">
   <div class="col-lg-6 my-3">


   <table class="table table-bordered">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>contact</th>
        <th>city</th>
        <th>Address</th>
        <th>Deny</th>
        <th>Upprove</th>
      </tr>
    </thead>
    <?php
    include 'connection.php';
    $sql="select * from temporarytb";
    $query=mysqli_query($con,$sql);
    while($res=mysqli_fetch_array($query))
    {

   
?>
    <tbody>
      <tr>
       <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['password'];?></td>
        <td><?php echo $res['contact'];?></td>
        <td><?php echo $res['city'];?></td>
        <td><?php echo $res['address'];?></td>
        <td><button class="btn-danger btn"><a href="deny.php?id=<?php echo $res['id'];?>" class="text-white">Deny</a></button></td>
        <td><button class="btn-success btn"><a href="approve.php?id=<?php echo $res['id'];?>" class="text-white" >approve</a></button></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
    
  </table>

 
</div>
    <div class="col-lg-6 my-5">
     

    <table class="table table-bordered">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>account</th>
        <th>city</th>
        <th>Address</th>
        <!-- <th>Deny</th> -->
        <!-- <th>Upprove</th> -->
      </tr>
    </thead>
    <?php
    include 'connection.php';
    $sql="select * from user";
    $query=mysqli_query($con,$sql);
    while($res=mysqli_fetch_array($query))
    {

   
?>
    <tbody>
      <tr>
       <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['password'];?></td>
        <td><?php echo $res['account'];?></td>
        <td><?php echo $res['city'];?></td>
        <td><?php echo $res['address'];?></td>
        
        
      </tr>
      <?php
    }
    ?>
    </tbody>
    
  </table>



    </div>
 </div>
  </div>





</body>
</html>
