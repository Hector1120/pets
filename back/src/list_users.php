<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List all users</title>
</head>
<body>
  <table border="1" align ="center">
    <tr>
        <th st colspan="7">List all users</th>
    </tr>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Identificación</th>
        <th>Address</th>
        <th>Cellphone</th>
        <th>E-mail</th>
        <th>...</th>
    </tr>
    <tr></tr>
    <?php
    include("../config/connectionDB.php"); 
    $sql="SELECT * FROM users";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<tr>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['numer_id']."</td>
            <td>".$row['address']."</td>
            <td>".$row['cellphone']."</td>
            <td>".$row['email']."</td>
            <td><a href='http://localhost/pets/back/src/delete_user.php?userID=".$row['id']."'>
            <img src='../../front/icons/eliminar.png' width ='50'></a>
            &nbsp;&nbsp;<a href='http://localhost/pets/back/src/edit_user.php?userID=".$row['id']."'>
            <img src='../../front/icons/editar.png' width='50'></a></td>
            
            </tr>";
        
        }//while
    }else{
        echo" No data found";
    }
    ?>
  </table>  
</body>
</html>