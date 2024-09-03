<?php
require "inc/conn.php";  
require "inc/check_login.php";
require "inc/functions.php";
$id=null;


$id=$_GET['id'];
$status=$_GET['status'];
($status == -1) ? $status =1 : $status = -1;


UpdateStatus($id,$status);


?>