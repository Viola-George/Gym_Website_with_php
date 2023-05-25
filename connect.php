<?php


//server details
$servername="localhost";
$username="root";
$password="";

//create a connection
$conn= mysqli_connect($servername, $username,$password);
if($conn){
 
}else{
    //echo"connection not established";
}
// a query statement
mysqli_select_db($conn,'platinumgym');

?>