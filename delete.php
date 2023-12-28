<?php
    include("connect.php");
    $id = $_GET['id'];
    $q = "delete from todo where Id = $id ";
    mysqli_query($con,$q);    
    header('location:view.php');
?>