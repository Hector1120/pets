<?php
    include("../config/connectionDB.php");
    $userId=$_POST['UID'];
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $idenum = $_POST['id_num'];
    $address = $_POST['Adress'];
    $cel_phone = $_POST['cel_Phone'];
    $email = $_POST['Email'];

    $sql = " UPDATE users SET
        first_name = '$fname',
        last_name = '$lname',
        numer_id = '$idenum',
        address = '$address',
        cellphone = '$cel_phone',
        email= '$email'
    WHERE  
        id = '$userId' ";

    if($conn->query($sql) === TRUE){
        echo"<script>alert('User has been updated')</script>";
        header("refresh:0;url=http://localhost/pets/back/src/list_users.php");
    }else{
        echo $conn->error;
    }
 ?>