<?php


    include("config.php");

    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM fam_quotes where id=$id");

    header("Location:index.php")

?>