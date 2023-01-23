<?php
include "../db/db-connect.php";
?>
<?php
if(isset($_POST['submit'])){
   $fullname = $_POST['fullname'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);

  $sql = "INSERT into tbl_admin(full_name,user_name,password) VALUES('$fullname','$username','$password')";
  $res = mysqli_query($conn,$sql);
   
  if($res){
    $_SESSION['add'] = "Admin added successfully";
    header("location:".SITEURL.'admin/index.php');
  } else {
    $_SESSION['add'] = "Failed to add admin";
    header("location:".SITEURL.'admin/regiter.php');
  }
}

?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" href="IMG/MindHub logo.png" type="image/icon type">
    <link rel="stylesheet" href="../Login/style.css">
    <title>MindHub</title>
    </head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <img class="img-logo" src="../IMG/MindHub-logo.png" alt="logo">
          <span class="h1 fw-bold mb-0">Mind Hub</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post" action="#">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register!</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="fullname" />
              <label class="form-label" for="form2Example18">Full Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="username" />
              <label class="form-label" for="form2Example18">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit" name="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Already have an account? <a href="index.php" class="link-info">Login here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../IMG/TUK-Back.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>

