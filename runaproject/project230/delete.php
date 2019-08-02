<?php
    include('db_connect.php');
    $id=$_POST['id'];
    $nquery="DELETE FROM `billtable` WHERE id=".$id;
    if (mysqli_query($conn,$nquery)) {
        echo "<p style='background-color:lightgreen;'>! Row Deleted</p>";
        include('index.php');
    }else{
        echo "Data cannot deleted";
    }
?>
