<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="login">

<form class="shadow w-450 p-3" 
      action ="php/signup.php"
      method="post">

    <h4>Create Account </h4><br>
    <?php if (isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
     <?php echo $_GET['error'];?> <!-- the message behined the information if it was rong -->
    </div>
    <?php } ?>

    <?php if (isset($_GET['success'])){ ?>
    <div class="alert alert-success" role="alert">
     <?php echo $_GET['success'];?> <!-- the message behined the information  that is true-->
    </div>
    <?php } ?>

  <div class="mb-3">
    <label class="form-label"> Full Name</label>
    <input type="text" 
           class="form-control"
           name ="fname"
           value ="<?php echo (isset($_GET['fname']))?$_GET['fname']:
           "";?>"><!--for kepp the full name Yban-->
</div>
<div class="mb-3">
    <label class="form-label"> User Name</label>
    <input type="text" 
           class="form-control"
           name ="uname"
           value ="<?php echo (isset($_GET['uname']))?$_GET['uname']:
           "";?>">
</div>
<div class="mb-3">
    <label class="form-label"> password </label>
    <input type="password" 
           class="form-control"
           name ="pass">
</div>
  <button type="submit" class="btn ">Sing Up</button>
  <a href="login.php" class="link">Login</a>
</form>
</div>
</body>
</html>