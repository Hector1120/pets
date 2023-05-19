<?php
    include("../config/connectionDB.php"); 
    $id=$_GET['userID'];
    $sql="SELECT * FROM users where id='$id'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $f_name=$row['first_name'];
            $l_name=$row['last_name'];
            $ident=$row['numer_id'];
            $Address=$row['address'];
            $mobile=$row['cellphone'];
            $Email=$row['email'];
        
        }//while
    }else{
        echo" No data found";
    }
    ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets/User</title>
</head>

<body background="../icons/Cesmag.jpg">
    <font color="black" style="font-family:cursive">
        <h1>Bienvenidos </h1>
        <img src="../../front/icons/Escudo.png" width="100"> <br>
        <center>
        <form name="editUserForm" action="http://127.0.0.1/pets/back/src/update_user.php" method="post">
            <label>Firstname</label>&nbsp;&nbsp;<input type="text" name="f_name" 
                     value =' <?php echo $f_name; ?> ' required><br><br>
                <label>Lastname</label>&nbsp;&nbsp;<input type="text" name="l_name" 
                     value =' <?php echo $l_name; ?> ' required><br><br>
                <label>Ident.num</label>&nbsp;&nbsp;<input type="text" name="id_num" 
                     value =' <?php echo $ident; ?> ' required
                     disable="true"><br><br>
                <label>Address</label>&nbsp;&nbsp;<input type="text" name="Adress" 
                     value =' <?php echo $Address; ?> 'required
                     ><br><br>
                <label>Cellphone</label>&nbsp;&nbsp;<input type="text" name="cel_Phone" 
                     value =' <?php echo $mobile; ?> ' required
                     ><br><br>
                <label>E-mail</label>&nbsp;&nbsp;<input type="text" name="Email" 
                     value =' <?php echo $Email; ?> ' required
                     ><br><br>
                <button>Update</button>
            

        </form>
        </center>
</body>

</html>