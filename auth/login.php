<?php
   require '../header.php';
?>

<html>
    <head>
        <title>Login - LMS</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <div class="div-center">

            <h2>Login to E-Library</h2>
            <form active="" method="POST">
            Enter SRN/Email: <input type="text" name="userid" required><br><br>
            Enter Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="submit">
            </form>
            <?php

            if(isset($_POST["submit"]))
            {
                $uname = $_POST['userid'];
                $password = $_POST['password'];
                if($_POST["userid"]=='admin' && $_POST["password"]=='admin'){
                    $_SESSION["user"] = "admin";
                    header("Location: /lms/admin.php"); //redirecting to admin panel

                }
                else{
                    $sql = "select * from users where srn='$uname' and password='$password'";
                    $sql1 = "select * from users where email='$uname' and password='$password'";

                    $res = mysqli_query($conn,$sql);
                    $res1 = mysqli_query($conn,$sql1);

                    if(mysqli_num_rows($res)==1 || mysqli_num_rows($res1)){
                        $_SESSION["user"] = "student";
                        if(mysqli_num_rows($res)==1){
                            $row = mysqli_fetch_assoc($res);
                        }
                        else{
                            $row = mysqli_fetch_assoc($res1);
                        }
                        $_SESSION["srn"] = $row["srn"];
                        $_SESSION["name"] = $row["name"]; //sessions not working
                        header("Location: /lms/home.php");
                    }
                    else{
                        echo "<p class='error'>Incorrect UserId/Password</p>";
                    }
                }

            } 
        ?>
        </div>

    </body>
</html>
