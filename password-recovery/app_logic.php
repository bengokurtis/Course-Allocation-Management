<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

$errors = [];
$user_id = "";


if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = md5($_POST['password']);
     
      if (empty($username)) array_push($errors, "Username or Email is required");
      if (empty($password)) array_push($errors, "Password is required");

      

    if(count($errors) == 0){
    $query = "SELECT * FROM tbl_students WHERE student_reg_no = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count === 1){
      $row = mysqli_fetch_assoc($result);
      $student_name = $row['full_name'];
      $_SESSION['login'] = "Login Successful";
      $_SESSION['user'] = $student_name;
      header("Location:Students/dashboard.php");
    } else {
      $_SESSION['login-error'] = "Login Failed";
      header("Location:index.php");
    }
  }


}


if (isset($_POST['reset-password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // ensure that the user exists on our system
    $query = "SELECT email FROM tbl_students WHERE email='$email'";
    $results = mysqli_query($conn, $query);
  
    if (empty($email)) {
      array_push($errors, "Your email is required");
    }else if(mysqli_num_rows($results) <= 0) {
      array_push($errors, "Sorry, no user exists on our system with that email");
    }
    // generate a unique random token of length 100
    $token = bin2hex(random_bytes(50));
  
    if (count($errors) == 0) {
      // store token in the password-reset database table against the user's email
      $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
      $results = mysqli_query($conn, $sql);
  
      // Send email to user with the token in a link they can click on
    
      
      $to = $email;
    $subject = "Reset your password on examplesite.com";
    $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: info@examplesite.com";
    mail($to, $subject, $msg, $headers);
      if(mail($to,$subject,$message, $headers)) {
          echo "The email message was sent.";
      } else {
          echo "The email message was not sent.";
      }
      
      //header('location: pending.php?email=' . $email);
    }
  }

  if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $new_pass_c = mysqli_real_escape_string($conn, $_POST['new_pass_c']);
  
    // Grab to token that came from the email link
    $token = $_SESSION['token'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
      // select email address of user from the password_reset table 
      $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
      $results = mysqli_query($db, $sql);
      $email = mysqli_fetch_assoc($results)['email'];
  
      if ($email) {
        $new_pass = md5($new_pass);
        $sql = "UPDATE tbl_students SET password='$new_pass' WHERE email='$email'";
        $results = mysqli_query($conn, $sql);
        header('location: Students/dashboard.php');
      }
    }
  }
  


?>
