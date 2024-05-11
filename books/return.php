<?php
     include '../header.php';
     include '../uservalid.php';


     parse_str(parse_url($_SERVER["REQUEST_URI"])['query'], $params);
     $bid = intval($params['bid']);
     $srn = $_SESSION['srn'];

     $sql = "delete from lend where bid='$bid' and srn='$srn'";
     $sql1 = "UPDATE books SET copies=copies+1 WHERE bid='$bid'";
    
     $res = mysqli_query($conn,$sql);
     if($res){
        $res1 = mysqli_query($conn,$sql1);
        if($res1){
            header("Location: /lms/home.php");
        }
     }


?>