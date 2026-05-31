<?php include "DatabaseConnection.php";
 if (isset($_POST['register'])) {
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "insert into users (name, email, password) values('$name','$email','$password')";
     mysqli_query($connection, $query);
       { echo "register successfully";
 }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterDB</title>
</head>
<body>
    <center>
        <h1> Hello in register </h1>
        <form action = "registerDB.php " method = "post">
            <input type= "text" name="name" placeholder= "name">
           <br>
           <input type= "email" name="email" placeholder= "email">
           <br>
            <input type= "password" name="password" placeholder= "paasword">
            <br>
            <br>
            <input type = "submit" value ="register" name ="register">
        </form>
    </center>
</body>
</html>