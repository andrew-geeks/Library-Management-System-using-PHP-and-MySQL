<!-- Registration of students into the system -->
<?php
    include '../headers/header.php';
    include '../headers/adminvalid.php';
?>


<html>
    <head>
        <title>Add Members - LMS</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <div class="div-center">
            <h2>Add members</h2>
            <form action="" method="POST">
            Enter SRN: <input type="text" name="srn" required><br><br>
            Enter Full Name: <input type="text" name="name" required><br><br>
            Enter Email: <input type="text" name="email" required><br><br>
            Enter Password: <input type="password" name="password" required><br><br>
            Confirm Password: <input type="password" name="cpassword" required><br><br>
            <input type="submit" name="add-submit">
            <?php
                if(isset($_POST["add-submit"])){
                    $srn = $_POST["srn"];
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $cpassword = $_POST["cpassword"];

                    //if password not matching
                    if($password!=$cpassword){
                        echo "<p class='error'>Passwords are not matching!</p>";
                    }
                    else{
                        $sql = "INSERT INTO `users` ( `srn`,  
                        `name`, `email`,`password`) VALUES ('$srn',  
                        '$name','$email','$password')";
                        
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo "<script>alert('User Added');</script>";
                            header("Location: /lms/admin.php"); 
                        }

                    }
                }
                
            ?>
            </form>
        </div>

    <script>
    </script>

    </body>
</html>
