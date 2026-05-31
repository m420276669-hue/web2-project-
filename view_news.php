<?php
include "DatabaseConnection.php";
$query ="select * from news where status ='active'";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View News</title>
</head>
<body>
    <center>
    <table border ="2">
        <tr> 
            <th> id </th>
            <th> title </th>
            <th> details </th>
            <th> delete_icon </th>
            <th> edit_icon </th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>  
            <td><?php echo $row ["id"]?></td>
            <td><?php echo $row ["title"]?></td>
            <td><?php echo $row ["details"]?></td>
            <td><a href = "delete_news.php ?id =<?php echo $row["id"]; ?>"> delete </a></td>
            <td><a href = "edit_news.php ?id =<?php echo $row["id"]; ?> "> edit </a></td>
        </tr>
    <?php } ?>
    </table>
</center>
</body>
</html>