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
<body class="loge">

<div class="container-fluid">
  <div class="row">

  <nav class="navbar navbar-expand-lg navbar-info  nave " >
  <div class="container-fluid login me-2">
    <a class="navbar-brand  " href="#">Registration</a>
    <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item btn">
          <a class="nav-link active  but" aria-current="page" href="#">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
        <div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-3 mx-auto" style="margin-top: 30px;
         border:1px;padding:20px; ">
            <center><h2 style="border-bottom:1px solid; width:100px;">LOGIN</h2></center>
            <form  action="login_submit.php" method="POST" class="form">
                
                <div class="form-group my-4">
                    <input type="email" class="form-control"  placeholder="Email"   name="email" required = "true">
                </div>
                <div class="form-group my-4">
                    <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                </div>
                
                <center><button type="submit" name="submit" class="btn btn-info my-2 mx-auto ma">Login</button><center>
            </form>
        </div>
    </div>
</div>
</div>

</body>
</html>