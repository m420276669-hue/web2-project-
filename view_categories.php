<?php 
 include "DatabaseConnection.php";
    $query = "select * From categories";
    $result = mysqli_query($connection, $query);
        echo "category views successfuly";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> veiw category </title>
</head>
<body>
    <center>
        <table border ="1">
        <tr>
            <th> Id </th>
            <th> Name </th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td> <?php echo $row ['id'];?></td>
            <td> <?php echo $row ['name'];?></td>
        </tr>
        <?php } ?>
        </table>
    </center>
</body>
</html>