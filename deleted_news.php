<?php
include "DatabaseConnection.php";
$query ="select * from news where status ='deleted'";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted News</title>
</head>
<body>
    <center>
    <table border ="2">
        <tr> 
            <th> id </th>
            <th> title </th>
            <th> details </th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>  
            <td><?php echo $row ["id"]?></td>
            <td><?php echo $row ["title"]?></td>
            <td><?php echo $row ["details"]?></td>
        </tr>
    <?php } ?>
    </table>
</center>
</body>
</html>