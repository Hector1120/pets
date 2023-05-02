//create_user.php
//Get data 
<?php
    include("../config/connectionDB.php");

    $fName=$_POST['f_name'];
    $lName=$_POST['l_name'];
    $idNum=$_POST['id_num'];
    $adress=$_POST['Adress'];
    $celPhone=$_POST['cel_Phone'];
    $email=$_POST['Email'];
    $pass=md5($_POST['Pass']);

    //Preparar el SQL
    $sql="INSERT INTO users (first_name,last_name,numer_id,address,cellphone,email,password)
    values('$fName','$lName','$idNum','$adress','$celPhone','$email','$pass')";

    if($conn->query($sql)===TRUE){
      //  echo " .::USER HAS BEEN CREATED SUCCESFULLY ::.";
      echo "<script>alert('User has been created succesfully')</script>";
      header("refresh:0;url=http://127.0.0.1/pets/front/src/login.html");
    }else{
        //echo " ERROR: " .$conn->error ."<br>".$sql;
        echo "<script>alert('User wasn't created succesfully')</script>";
        header("refresh:0;url=http://127.0.0.1/pets/front/src/create_user.html");
    }
?>