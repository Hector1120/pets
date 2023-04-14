<?php
//Developer : Hector Yurbrainer 
//MySQL engine Credentials
$host="127.0.0.1";
$username="root";
$password="";
$dbname="pets";
$port="3306";
//Create conection
$conn=new mysqli ($host,$username,$password,$dbname,$port);
///check connection
if($conn->connect_error){
    echo"Connection failed : " .$conn->connect_error;
}else{
    echo"Connection Successfully";
}
?>