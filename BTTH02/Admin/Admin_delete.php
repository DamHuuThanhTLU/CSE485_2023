<?php
    include('connect.php');
    $id = $_GET["id"];
    $sql = "DELETE FROM 'authentication_authorization' WHERE id = '$id' ";
    $result = mysqli_query($connect,$sql);
    header( "Location: Admin.php" );
?>