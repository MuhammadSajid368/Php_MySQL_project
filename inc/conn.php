<?php


/* Step 1:   Database Credentials 
   host (server), username, password, database name
*/
$host = "localhost";
$user = 'root';
$password = "";
$database = 'dwat30-store';


/* Step 2:   Create a connection

   mysqli_connect()
*/
/// connection handler
$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
        die("connectin failed");
}
