<?php
include "DatabaseConnection.php";
$id = $_GET["id"];
$query ="update news set status ='delete' where id='$id'";
mysqli_query($connection, $query);
    header ("location:view_news.php");
?>
