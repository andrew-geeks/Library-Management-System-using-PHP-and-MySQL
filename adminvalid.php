<!-- validation header to check if the user is admin -->

<?php
    if(!isset($_SESSION["user"])){
        header("Location: /lms");
    }
    else{
        if($_SESSION["user"]!="admin"){
            header("Location: /lms");
        }
    }
?>