

<?php

function createAccount($f, $l, $e, $p, $r, $s)
{

   global $conn;

   $query = "INSERT INTO users (
                     first_name, 
                     last_name, 
                     email,
                     password,
                     role,
                     status,
                     avatar_profile	
                     )  VALUES  
                     (
                        '$f' , '$l' , '$e' , '$p' , '$r' , $s , 'no-photo.png' 
                     )
                      ";

   mysqli_query($conn,   $query);
}
function UpdateStatus($id, $status)
{
   global $conn;
   $query = "UPDATE users SET status =$status WHERE Id =$id";
   mysqli_query($conn, $query);
   header("Location:users.php");
}


function fetch_all_users($id)
{

   global $conn;
   $query =  "SELECT * FROM users WHERE role != 'Admin' OR Id !=$id ";
   $result = mysqli_query($conn,  $query);
   if (!$result) {
      die('query failed - ' . mysqli_error($conn));
   }
   return $result;
}

function deleteUser($table, $id)
{
   global $conn;

   $query = "DELETE FROM $table WHERE Id = $id";

   mysqli_query($conn, $query);
   header('Location: ./');
}


function singleUser($id)
{

   global $conn;


   $query = "SELECT * FROM users WHERE Id = $id ";
   $res = mysqli_query($conn, $query);
   $row = mysqli_fetch_assoc($res);
   return   $row;
}
/* if not got the id then update the record b/c it means - now we already have just need to update that record */



// DDL - RETURN 
// DML 



function updateUser($f, $l, $e, $p, $id)
{
   global $conn;
   $q = "UPDATE users SET 
   first_name = '$f',
   last_name = '$l',
   email = '$e',
   password = '$p' 
   WHERE Id = $id";

   mysqli_query($conn, $q);

}

function login($email, $password)
{

   global $conn;

   $query  = "SELECT * from users WHERE email = '$email' AND password = '$password' ";

   $result = mysqli_query($conn, $query);

   $check_user = mysqli_num_rows($result);

   $row = mysqli_fetch_assoc($result);

   $data = [$check_user,  $row];

   return $data;
}
