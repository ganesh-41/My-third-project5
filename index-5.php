<!doctype html>
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
                <img src="arya-4.png" alt="" class="arya-1">
              </div>
           </div>
           <div class="row">
            <div class="col-12">
              <h1 class="Create-New">Create New Account</h1>
              <p class="Welcome-Back">Welcome Back! Please Enter Your details</p>
              </div>
           <form action="newac.php" method="post">
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputname1" aria-describedby="NameHelp"
              name="name" Required="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailaddress" Required="emailaddress">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password"  Required="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I agree to all Trem, Privacy and Fees</label>
            </div>
            <input type="submit" class="btn-get-started" value="Sign Up">
          </form>
<div>
  <a href="#" class="btn-get-started Google"><img src="google-logo-9822.png" alt="" height="30px" width="30px"></i>Sign in with google</a>
              
  <a href="#" class="btn-get-started Google"><img src="Apple-Logo.png" alt="" height="30px" width="50px">Sign in with apple</a>
</div>
<div>
  <p class="Already">Already have and account?<a href="index-1.php"  style="color: black;"> sing in</a></p>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>