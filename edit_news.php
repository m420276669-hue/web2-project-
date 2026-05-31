<?php
include "DatabaseConnection.php";
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $category_id = $_POST['category_id'];
    $query = "update news set title= '$title', 'details'= '$details', category_id = '$category_id' where id = '$id'";
    mysqli_query ($connection , $query);
    header("location: view_news.php");
}
$id = $_GET['id'];
$query = "select * from news where id = '$id'";
$result= mysqli_query ($connection , $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit News </title>
</head>
<body>
    <center>
    <form action ="edit_news.php" method="post" >
        <input type = "hidden" name= "id" value ="<?php echo $row ['id']; ?>"><br>
        <input type = "text" name = "title" value="<?php echo $row ['title']; ?>"><br>
        <input type = "number" name = "category_id" value ="<?php echo $row ['category_id']; ?>"><br>
        <input type = "text" name="details" value ="<?php echo $row ['details']; ?>"><br>
        <input type = "submit" value ="Edit">
     </form>
    </center>
</body>
</html>
