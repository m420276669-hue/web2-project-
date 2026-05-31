<?php include "DatabaseConnection.php";
 if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
     $result = mysqli_query($connection, $query);
      if (mysqli_num_rows($result) > 0){
       header ("location: dashboard.php");
     } else{ 
        echo "Login fail"; 
    }}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <center>
        <h1> Hello in login </h1>
        <form action = "login.php " method = "post">
           <input type= "email" name="email" placeholder= "email">
           <br>
            <input type= "password" name="password" placeholder= "paasword">
            <br>
            <br>
            <input type = "submit" value ="login" name ="login">
        </form>
    </center>
</body>