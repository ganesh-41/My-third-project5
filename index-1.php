<!doctype html>
<?php


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- font style link -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- fontosm link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

 <link rel="stylesheet" href="css.css/bootstrap-grid.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="arya.css">
    <title>Faision Design</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="arya-1.png" alt="" class="arya-1">
              </div>
           </div>
           <div class="row">
            <div class="col-12">
              <h1 class="Account">Sign In To Your Account</h1>
              <p class="Welcome">Welcome Back You've Been missed!</p>
              </div>
              <form action="signin.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address*</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" Required="email">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" Required="password">
                </div>
                <p><a href="index-2.php" class="Forgot">Forgot Password?</a></p>
                <!-- #region  #-->

                <input type="submit" value="Sign In" class="btn-get-started Sing">
                
              </form>

              <a href="#" class="btn-get-started Google"><img src="google-logo-9822.png" alt="" height="30px" width="30px">Sign in with google</a>
              
              <a href="#" class="btn-get-started Google"><img src="Apple-Logo.png" alt="" height="30px" width="50px">Sign in with apple</a>
           </div>
           </div>
 
 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
