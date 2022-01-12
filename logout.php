<?php
    include './config.php';
    unset($_SESSION['user']);
    header('location: index.php');
    mysqli_close($coon);

?>