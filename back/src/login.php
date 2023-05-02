<?php
//Get DataBase connection
include("../config/connectionDB.php");
//Get Data
$email = $_POST['Email'];
$pass=md5($_POST['Pass']);
//Create Query
$sql="SELECT * FROM users WHERE email = '$email' AND password ='$pass'";
$result = $conn->query($sql);
if($result->num_rows>0){
    // echo "THE USER EXISTS";
   header("Location:http://127.0.0.1/pets/front/src/home.html");
   
}else{
    echo "<script>alert('User was not created succesfully')</script>";
    header("refresh:0;url=http://127.0.0.1/pets/front/src/login.html");
    //echo $conn->error;
}
?>