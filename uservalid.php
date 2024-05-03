<!-- validation header to check if the user is student -->

<?php
    if(!isset($_SESSION["user"])){
        header("Location: /lms");
    }
    else{
        if($_SESSION["user"]!="student"){
            header("Location: /lms");
        }
    }
?>