<?php
     include '../header.php';
     include '../uservalid.php';


     parse_str(parse_url($_SERVER["REQUEST_URI"])['query'], $params);
     $bid = intval($params['bid']);
     $srn = $_SESSION['srn'];
     
     $sql = "SELECT copies FROM `books` WHERE bid='$bid'";
     $sql1 = "SELECT * FROM `lend` WHERE bid='$bid' AND srn='$srn'";
     $sql2 = "INSERT INTO `lend` ( `bid`, `srn`) VALUES ('$bid', '$srn')";
     $sql3 = "UPDATE books SET copies=copies-1 WHERE bid='$bid'";

     $copies = mysqli_query($conn,$sql);
     if($copies->fetch_assoc()["copies"] > 0){
          //checking if book already taken
          $check = mysqli_query($conn,$sql1);

          if(mysqli_num_rows($check)==0){
               //allowed to lend
               $lend = mysqli_query($conn,$sql2);
               if($lend){
                    //sucess - lend
                    $update = mysqli_query($conn,$sql3);
                    if($update){
                         //copies updated
                         header("Location: /lms/home.php");
                    }
               }
          }
          else{
               //redirect to home -- already has the book
               header("Location: /lms/home.php");
          }
     }
     else{
          //redirect to home -- no copies
          header("Location: /lms/home.php");
     }
?>

