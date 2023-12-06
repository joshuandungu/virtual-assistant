<?php

session_start();
    require("includes/connection.php");

    if(!isset($_SESSION['username'])){
        header("location: clientlogin1.php");
        die();
    }
?>





<?php include_once('includes/header.php');?>
<?php include_once('includes/footer.php');?>