<?php 
session_start();

/// first we need to required conn & function file

require "inc/conn.php"; 
require "inc/functions.php"; 


// now we dont need these hard coded values
// $db_email = "admin@pny.com";
// $db_password = "123abc";




$error = null;

/* if you are trying to access index page directly 
then show un-authorized*/
if(isset($_GET['unauthorized'])) {
  $error = "You are not allowed to access this page please login";
}

/* If user clicks the login button */
if(isset($_POST['btnLogin'])){

  /* here we getting email & password from html form */
   $email = $_POST['email']; 
   $password = $_POST['password']; 

   /// we already getting values from form now put these
   // values into the function args
   $data = login($email, $password);

   if($data[0] == 1)
  {

    $_SESSION['logged_user'] = true;
    $_SESSION['first_name'] = $data[1]['first_name'];
    $_SESSION['last_name'] = $data[1]['last_name'];
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $data[1]['Id'];
    $_SESSION['role'] = $data[1]['role'];
    $_SESSION['createdAt'] = $data[1]['createdAt'];
    if($data[1]['status'] == -1){
      $error = "Your Account is blocked Please contact with admin!";
      include "views/vlogin.php";
    }
    
    else{
    header("Location: ./");
    
  }
    
  }
}
else {
       include "views/vlogin.php";
}