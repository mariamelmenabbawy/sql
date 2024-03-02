<?php


// connect to database
$connect=mysqli_connect('localhost','root','','authentication');
if(!$connect){
die( 'Error' .mysqli_connect_error());
  exit;
}

// if(isset($_POST['authentication']) ){
  

    // Sanitize the 'user' and 'pass' inputs
//     $username = mysqli_real_escape_string( $_POST['username']);
//     $password = mysqli_real_escape_string(sha256($_POST['password']));
    
//     if (empty($username)){$errors[]="username is required";}
//     if (empty($password)){$errors[]="password is required";}
    
//      if (isset($errors) && !empty($errors)) {
//          echo '<div class="error-container">';
//          foreach ($errors as $error) {
//              echo '<p class="error-message">' . $error . '</p>';
//          }
//          echo '</div>';
//      }
//      if (count($errors)== 0) {

//      }

  
//     $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
//    $result=mysqli_query($connect,$query);
//    $count=mysqli_num_rows($result);
//    if ($count>0){ echo"success";}
//    else {echo "failed";}
//    $_SESSION['username']=$username;
//    $_SESSION['success']="successful login";
//    header('location : notes.php');

// }?>