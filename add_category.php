<?php 
 include "DatabaseConnection.php";
 if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $query = "insert into categories (name) values ('$name')";
    mysqli_query($connection, $query);
        echo "category added successfuly"; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add category</title>
</head>
<body>
    <form action ="add_category.php" method="post">
    <input type ="text" name ="name">
    <input type ="submit" value="add category">
</form>
</body>
</html>