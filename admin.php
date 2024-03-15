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
  
  

    <div class="container">
<div class="col-lg-6 col-lg-offset-4 col-md-6 col-md-offset-3 mx-auto my-5">
    
<form  action="admin_script.php" method="POST" style="" class="form">
   <h2 style="text-align:center ;">Admin Login</h2>
                 <div class="form-group my-5">
                    <input class="form-control" placeholder="Name" name="email"  required = "true" >
                 </div>
                 <div class="form-group my-4">
                    <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                 </div>
                 <button type="submit" name="submit" class="btn btn-info my-4 bute" style="text-algin:center;">Login</button>
    </form>

        </div>
    </div>
</div>
</div>

</body>
</html>