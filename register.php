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
<body class="bdy">

<div class="container-fluid" >
  <div class="row">
  
  <nav class="navbar navbar-expand-lg navbar-info  nave " >
  <div class="container-fluid login">
    <a class="navbar-brand but" href="#"></a>
    <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item btn">
          <a class="nav-link active  but" aria-current="page" href="#"></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
<div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-3 mx-auto my-5">
            
            <center ><h2 style="border-bottom:1px solid; width:100px;margin:30px;font-size:25px;">SIGN UP</h2></center>
            <form  action="register_script.php" method="POST" style="" class="form">
                <div class="form-group my-4">
                    <input class="form-control" placeholder="Name" name="name"  required = "true" >
                </div>
                <div class="form-group my-4">
                    <input type="email" class="form-control"  placeholder="email"   name="email" required = "true">
                </div>
                <div class="form-group my-4">
                    <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                </div>
                <div class="form-group my-4">
                    <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                </div>
                <div class="form-group my-4">
                    <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                </div>
                <div class="form-group my-4">
                    <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                </div>
                <center class="centr"><button type="submit" name="submit" class="btn btn-info my-4 mx-auto">SignIn</button><center>
            </form>
        </div>
    </div>
</div>
</div>

</body>
</html>