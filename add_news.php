<?php
 include "DatabaseConnection.php";
 if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $categpry_id= $_POST['category_id'];
    $details= $_POST['details'];
    $image= $_FILES['image'] ['name'];
    $user_id = 1;
    $status = "active";
    
    $image = $_FILES ['image'] ['name'];
    $query = "insert into news (title, category_id, details, image, user_id, status) values ('$title', '$category_id', '$detalis', '$image', '$user_id', '$status')";
     mysqli_query($connection, $query);
       echo "news added successfully";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
</head>
<body>
    <center>
    <form action ="add_news.php" method="post" enctype = "multipart/form-data">
        <input type = "text" name = "title" placeholder ="title news">
        <br><br>
        <input type = "number" name = "category_id" placeholder = "category">
        <br><br>
        <input type = "text" name="details" placeholder = "details">
        <br><br>
        <input type = "file" name= "image" placeholder = "image">
        <br><br>
        <input type = "submit" value ="submit">
     </form>
    </center>
        
    
</body>
</html>