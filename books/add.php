<?php
    include './header.php';

?>

<html>
    <head>
        <title>Add Books - LMS</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <div class="div-center">
            <h2>Add Books</h2>
            <form action="" method="POST">
            Enter Book name: <input type="text" name="bname" required><br><br>
            Enter Author Name: <input type="text" name="authname" required><br><br>
            <label for="category">Choose book category:</label>
            <select name="category" id="category">
                <option value="Science">Science</option>
                <option value="Computer Technologies">Computer Technologies</option>
                <option value="Fiction">Fiction</option>
                <option value="Automotive">Automotive</option>
            </select><br/><br/>
            Enter no. of copies: <input type="number" name="copies" required><br><br>
            <input type="submit" name="books-submit">
            <?php

                if(isset($_POST["books-submit"])){
                    $bname = $_POST["bname"];
                    $authname = $_POST["authname"];
                    $category = $_POST["category"];
                    $copies = $_POST["copies"];
                    if($copies == 0){
                        echo "<p class='error'>Minimum one copy must be stored!</p>";
                    }
                    else{
                        $sql = "INSERT INTO `books` ( `bname`,  
                        `author`, `category`,`copies`) VALUES ('$bname',  
                        '$authname','$category','$copies')";
                        
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo "<script>alert('Book Added');</script>";
                            header("Location: /lms/admin.php"); 
                        }

                    }
                }
            ?>
        </div>
    </body>
</html>